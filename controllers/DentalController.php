<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Dental;
use app\models\DentalSearch;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DentalController implements the CRUD actions for Dental model.
 */
class DentalController extends Controller
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

    /**
     * Lists all Dental models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DentalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dental model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => User::findOne($id) ,
            // 'model' => $this->findModel($id),
        ]);
    }


    protected function getDentalHealth($post)
    {
        $tooth_number = $post['tooth_number'];
        $treatment = $post['treatment'];

        $record = [];
        foreach ($tooth_number as $key => $value) {
            $record[] = [
                'tooth_number' => $value,
                'treatment' => $treatment[$key]
            ];
        }

        return json_encode($record);
    }


    /**
     * Creates a new Dental model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dental();

        if ($model->load(Yii::$app->request->post())) {
            $model->dental_health = $this->getDentalHealth(Yii::$app->request->post());


            $model->chief_complaint = json_encode($model->chief_complaint);
            $model->medical_history = json_encode($model->medical_history);
            $model->dental_history  = json_encode($model->dental_history);
            $model->oral_condition  = json_encode($model->oral_condition);

            $model->save();
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        $data['model'] = $model;
        $data['users'] = UserSearch::dropDown("patient");

        return $this->render('create', $data);
    }

    /**
     * Updates an existing Dental model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->dental_health = $this->getDentalHealth(Yii::$app->request->post());


            $model->chief_complaint = json_encode($model->chief_complaint);
            $model->medical_history = json_encode($model->medical_history);
            $model->dental_history  = json_encode($model->dental_history);
            $model->oral_condition  = json_encode($model->oral_condition);

            $model->save();
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        $data['model'] = $model;
        $data['users'] = UserSearch::dropDown("patient");

        return $this->render('update', $data);
    }

    /**
     * Deletes an existing Dental model.
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
     * Finds the Dental model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dental the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dental::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
