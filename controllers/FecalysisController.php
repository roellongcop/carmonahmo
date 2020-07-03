<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Fecalysis;
use app\models\FecalysisSearch;
use app\models\HematologySearch;
use app\models\UrinalysisSearch;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FecalysisController implements the CRUD actions for Fecalysis model.
 */
class FecalysisController extends Controller
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
     * Lists all Fecalysis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FecalysisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $searchModelHematology = new HematologySearch();
        $dataProviderHematology = $searchModelHematology->search(Yii::$app->request->queryParams);
        
        $searchModelUrinalysis = new UrinalysisSearch();
        $dataProviderUrinalysis = $searchModelUrinalysis->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

            'searchModelHematology' => $searchModelHematology,
            'dataProviderHematology' => $dataProviderHematology,

            'searchModelUrinalysis' => $searchModelUrinalysis,
            'dataProviderUrinalysis' => $dataProviderUrinalysis,
        ]);
    }

    /**
     * Displays a single Fecalysis model.
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
     * Creates a new Fecalysis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fecalysis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }


        $data['model'] = $model;
        $data['patients'] = UserSearch::dropDown('patient');
        $data['staffs'] = UserSearch::dropDown('staff');

        return $this->render('create', $data);
    }

    /**
     * Updates an existing Fecalysis model.
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

        $data['model'] = $model;
        $data['patients'] = UserSearch::dropDown('patient');
        $data['staffs'] = UserSearch::dropDown('staff');

        return $this->render('update', $data);
    }

    /**
     * Deletes an existing Fecalysis model.
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
     * Finds the Fecalysis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fecalysis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fecalysis::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id),
        ]);
    }
   
}
