<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Urinalysis;
use app\models\UrinalysisSearch;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UrinalysisController implements the CRUD actions for Urinalysis model.
 */
class UrinalysisController extends Controller
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
     * Lists all Urinalysis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UrinalysisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Urinalysis model.
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
     * Creates a new Urinalysis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Urinalysis();
        
       

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             
            return $this->redirect(['view', 'id' => $model->patient_id]);
        }

        $data['model'] = $model;
        $data['patients'] = UserSearch::dropDown('patient');
        $data['staffs'] = UserSearch::dropDown('staff');

        return $this->render('create', $data);
    }

    /**
     * Updates an existing Urinalysis model.
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
     * Deletes an existing Urinalysis model.
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
     * Finds the Urinalysis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Urinalysis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Urinalysis::findOne($id)) !== null) {
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
