<?php

namespace app\controllers;

use Yii;
use app\models\Dots;
use app\models\DotsSearch;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DotsController implements the CRUD actions for Dots model.
 */
class DotsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return Yii::$app->template->behaviors();
    }

    public function beforeAction($action)
    {
        Yii::$app->template->IncomingAppointment(); 


        return parent::beforeAction($action);
    }

    public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Lists all Dots models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DotsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dots model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
          $model = Dots::find()->where(['patient_id' => $id])->all();
         return $this->render('view', ['model' => $model]);
  
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);
    }

    /**
     * Creates a new Dots model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    { 

        $model = new Dots();

        if ($model->load(Yii::$app->request->post())) { 
            

            $model->history_of_treatment = json_encode($model->history_of_treatment);
            $model->disease_classification  = json_encode($model->disease_classification);
            $model->reason_for_examination  = json_encode($model->reason_for_examination);
            $model->type_of_specimen  = json_encode($model->type_of_specimen);
            $model->test_requested  = json_encode($model->test_requested);
            $model->save(false);

              $model1 = Dots::find()->where(['patient_id' => $model->patient_id])->all();
             return $this->render('view', [
                'model' => $model1,
            ]);
            //return $this->redirect(['view', 'id' => $model->id]);
        }

        $data['model'] = $model;
        $data['users'] = UserSearch::dropDown("patient");

        return $this->render('create', $data);
    }

    /**
     * Updates an existing Dots model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        // return $this->render('update', [
        //     'model' => $model,
        // ]);


        if ($model->load(Yii::$app->request->post())) {

            $model->encodeData();

            $model->save(false);

            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        $data['model'] = $model;
        $data['users'] = UserSearch::dropDown("patient");

        return $this->render('update', $data);
    }

    /**
     * Deletes an existing Dots model.
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

    public function actionMonitoring($id)
    {
        return $this->render('monitoring', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionViewPatient($id){
        
        $model = Dots::find()->where(['patient_id' => $id])->all();
         return $this->render('view_patient', [
            'model' => $model,
        ]);
        
    }
    /**
     * Finds the Dots model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dots the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dots::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
