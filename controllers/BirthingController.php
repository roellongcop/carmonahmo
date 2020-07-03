<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Birthing;
use app\models\BirthingSearch;
use app\models\BirthingAssessment;
use app\models\BirthingAssessmentSearch;
use app\models\BirthingIntravenousFluid;
use app\models\BirthingIntravenousFluidSearch;
use app\models\BirthingMonitoringSheet;
use app\models\BirthingMonitoringSheetSearch;
use app\models\BirthingWeightProgress;
use app\models\BirthingWeightProgressSearch;
use app\models\BirthingPhysicianOrder;
use app\models\BirthingPhysicianOrderSearch;
use app\models\BirthingNewborn;
use app\models\BirthingNewbornSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UserSearch;

/**
 * BirthingController implements the CRUD actions for Birthing model.
 */
class BirthingController extends Controller
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
     * Lists all Birthing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModelBirthing = new BirthingSearch();
        $dataProviderBirthing = $searchModelBirthing->search(Yii::$app->request->queryParams);
        
        $searchModelBirthingAssessment = new BirthingAssessmentSearch();
        $dataProviderBirthingAssessment = $searchModelBirthingAssessment->search(Yii::$app->request->queryParams);
        
        $searchModelBirthingIntravenousFluid = new BirthingIntravenousFluidSearch();
        $dataProviderBirthingIntravenousFluid = $searchModelBirthingIntravenousFluid->search(Yii::$app->request->queryParams);
        
        $searchModelBirthingMonitoringSheet = new BirthingMonitoringSheetSearch();
        $dataProviderBirthingMonitoringSheet = $searchModelBirthingMonitoringSheet->search(Yii::$app->request->queryParams);
        
        $searchModelBirthingWeightProgress = new BirthingWeightProgressSearch();
        $dataProviderBirthingWeightProgress = $searchModelBirthingWeightProgress->search(Yii::$app->request->queryParams);
        
        $searchModelBirthingPhysicianOrder = new BirthingPhysicianOrderSearch();
        $dataProviderBirthingPhysicianOrder = $searchModelBirthingPhysicianOrder->search(Yii::$app->request->queryParams);
        
        $searchModelBirthingNewborn = new BirthingNewbornSearch();
        $dataProviderBirthingNewborn = $searchModelBirthingNewborn->search(Yii::$app->request->queryParams);
           
        
        
        return $this->render('index', [
            'searchModelBirthing' => $searchModelBirthing,
            'dataProviderBirthing' => $dataProviderBirthing,
            
            'searchModelBirthingAssessment' => $searchModelBirthingAssessment,
            'dataProviderBirthingAssessment' => $dataProviderBirthingAssessment,
            
            'searchModelBirthingIntravenousFluid' => $searchModelBirthingIntravenousFluid,
            'dataProviderBirthingIntravenousFluid' => $dataProviderBirthingIntravenousFluid,
            
            'searchModelBirthingMonitoringSheet' => $searchModelBirthingMonitoringSheet,
            'dataProviderBirthingMonitoringSheet' => $dataProviderBirthingMonitoringSheet,
            
            'searchModelBirthingWeightProgress' => $searchModelBirthingWeightProgress,
            'dataProviderBirthingWeightProgress' => $dataProviderBirthingWeightProgress,
            
            'searchModelBirthingPhysicianOrder' => $searchModelBirthingPhysicianOrder,
            'dataProviderBirthingPhysicianOrder' => $dataProviderBirthingPhysicianOrder,
            
            'searchModelBirthingNewborn' => $searchModelBirthingNewborn,
            'dataProviderBirthingNewborn' => $dataProviderBirthingNewborn,
        ]);
    }

    /**
     * Displays a single Birthing model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        
        return $this->render('view', [
            'model' => User::findOne($id),
        ]);
    }

    /**
     * Creates a new Birthing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Birthing();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        return $this->render('create', [
            'model' => $model,
            'patients' => UserSearch::dropDown("birthing")
        ]);
    }

    /**
     * Updates an existing Birthing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        return $this->render('update', [
            'model' => $model,
            'patients' => UserSearch::dropDown("birthing")
        ]);
    }

    /**
     * Deletes an existing Birthing model.
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
     * Finds the Birthing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Birthing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Birthing::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionMonitoring($id)
    {
        return $this->render('monitoring', [
            'model' => $this->findModel($id),
        ]);
    }
}
