<?php

namespace app\controllers;

use Yii;
use app\models\Appointment;
use app\models\AppointmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ComplaintSearch;
use app\models\User;

/**
 * AppointmentController implements the CRUD actions for Appointment model.
 */
class AppointmentController extends Controller
{
 
    public function behaviors()
    {
        return Yii::$app->template->behaviors();
    }

    public function beforeAction($action)
    {
        Yii::$app->template->IncomingAppointment(); 


        return parent::beforeAction($action);
    }

    /**
     * Lists all Appointment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppointmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Appointment model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

   public function actionCheck($date){
       
       
     $this->layout = 'login';
     $rtn= "<option> Select Time. </option>";
    $data  = Yii::$app->params['times'];
       
        $checkTime = Yii::$app->db->createCommand('SELECT scheduled_time FROM hmo_appointment where date(scheduled_date) = date('.$date.') and status != 0')->queryAll();
            
   
        if(sizeof($checkTime) > 0){
            foreach ($checkTime as $key => $value) {
                if(in_array($value['scheduled_time'],$data)){
                    unset($data[$value['scheduled_time']]);
                }
            }
        }

        if(sizeof($data) == 0){
          $rtn .=  " <option> Sorry No available time for this day. </option>";    
        }   
        else{
            
            foreach ($data as $key => $value) {
                $rtn .= "<option value='" . $value . "'>" . $value . "</option>";
            }
        }
        
    
    return $rtn;
   }

    /**
     * Creates a new Appointment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Appointment();

        $user = User::findOne(Yii::$app->user->identity->id);

        $model->user_id = $user->id;
        $model->authkey = $user->authkey;

        $data['complaints'] = ComplaintSearch::dropDown();
        $data['model'] = $model;
        $data['limit'] = false;
        // $data['item_time']  = Yii::$app->params['times'];
       
        // $checkTime = Yii::$app->db->createCommand('SELECT scheduled_time FROM hmo_appointment where date(date_created) = date(now()) and status != 0')->queryAll();
        
        // if(sizeof($checkTime) > 0){
        //     foreach ($checkTime as $key => $value) {
        //         if(in_array($value['scheduled_time'],$data['item_time'])){
        //             unset($data['item_time'][$value['scheduled_time']]);
        //         }
        //     }
        // }

        // if(sizeof($data['item_time']) == 0){
        //         $data['limit'] = true;
        //         return $this->render('create', $data);            
        // }

        $checkCountAppointment = Yii::$app->db->createCommand('SELECT count(*) as cnt FROM hmo_appointment where date(date_created) = date(now()) and status != 2 ')->queryAll();

        if(intval($checkCountAppointment[0]['cnt']) >= 200){
            $data['limit'] = true;
            return $this->render('create', $data);
        }


        if (AppointmentSearch::hasNoPending($user->id)) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->template->writeNotif($model->user->id, 'Youve created an appointment');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $error = 'Has Pending Appointment';
        }

        $data['error'] = (isset($error)) ? $error : '';
        return $this->render('create', $data);
    }

    /**
     * Updates an existing Appointment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $user = User::findOne($model->user_id);

        $model->authkey = $user->authkey;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }



        $data['complaints'] = ComplaintSearch::dropDown();
        $data['model'] = $model;


        return $this->render('update', $data);

    }

    /**
     * Deletes an existing Appointment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Appointment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Appointment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Appointment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionApproved($id)
    {
        $model = $this->findModel($id);
        $model->authkey = $model->user->authkey;
        $model->status = 1;
        $model->save();

        Yii::$app->template->writeNotif($model->user->id, 'Your Reservation was approved');
    }

    
    public function actionChart()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = AppointmentSearch::byMonth($i);
        }

        return json_encode($total);
    }


    public function actionCancel($id)
    {
        $model =  $this->findModel($id);

        if (Yii::$app->request->post()) {
            Yii::$app->template->writeNotif($model->user_id, 'Your Reservation was cancel <br> because of ' . Yii::$app->request->post('reason'));

            $model->authkey = Yii::$app->user->identity->authkey;
            $model->status = 2;
            if ($model->save()) {
                return $this->redirect(['index']);
            }

            print_r($model->errors);


            
        }


        return $this->render('cancel', [
            'model' => $model,
        ]);
    }
}

