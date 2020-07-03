<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Appointment;
use app\models\AppointmentSearch;
use app\models\Medical;
use app\models\MedicalSearch;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MedicalController implements the CRUD actions for Medical model.
 */
class MedicalController extends Controller
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
     * Lists all Medical models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MedicalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Medical model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => User::findOne($id),
            // 'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Medical model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Medical();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }
        return $this->render('create', [
            'model' => $model,
            'patients' => UserSearch::dropDown("patient")
        ]);
    }

    /**
     * Updates an existing Medical model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        return $this->render('update', [
            'model' => $model,
            'patients' => UserSearch::dropDown("patient")
        ]);
    }

    /**
     * Deletes an existing Medical model.
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
     * Finds the Medical model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Medical the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Medical::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionStartCheckup($id)
    {
        $app = Appointment::findOne($id);

        $app->authkey = $app->user->authkey;
        $app->status = 3;
        $app->save();


        $model = new Medical();
        $model->patient_id = $app->user->id;
        $model->chief_complaint = $app->complaint->name;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        return $this->render('create', [
            'model' => $model,
            'patients' => UserSearch::dropDown("patient")
        ]);
    }

    public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id)
        ]);
    }
}
