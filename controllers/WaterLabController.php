<?php

namespace app\controllers;

use Yii;
use app\models\WaterLab;
use app\models\WaterLabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UserSearch;

/**
 * WaterLabController implements the CRUD actions for WaterLab model.
 */
class WaterLabController extends Controller
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
     * Lists all WaterLab models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WaterLabSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
        $record_null = WaterLab::find()->where(['result' => null])->all();
        $record_passed = WaterLab::find()->where(['result' => 0])->all();
        $record_failed = WaterLab::find()->where(['result' => 1])->all();
    
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'record_null' => $record_null,
            'record_passed' => $record_passed,
            'record_failed' => $record_failed,
        ]);
    }

    /**
     * Displays a single WaterLab model.
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

    /**
     * Creates a new WaterLab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WaterLab();

        if ($model->load(Yii::$app->request->post())) {

            $model->sampling_point = json_encode($model->sampling_point);
            $model->source_of_water_supply = json_encode($model->source_of_water_supply);
            $model->type_of_ownership = json_encode($model->type_of_ownership);
            $model->type_of_well = json_encode($model->type_of_well);
            $model->well_usage = json_encode($model->well_usage);
            $model->pump_required_priming = json_encode($model->pump_required_priming);
            $model->repair_done_within_2_months = json_encode($model->repair_done_within_2_months);
            $model->water_treated = json_encode($model->water_treated);
            $model->distance_from_well_of_the_following_in_meter = json_encode($model->distance_from_well_of_the_following_in_meter);
            $model->analysis_requested = json_encode($model->analysis_requested);
            $model->save();


            return $this->redirect(['view', 'id' => $model->id]);
        }



        $data['model'] = $model;
        $data['users'] = UserSearch::dropDown("patient");

        return $this->render('create', $data);
    }

    /**
     * Updates an existing WaterLab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->sampling_point = json_encode($model->sampling_point);
            $model->source_of_water_supply = json_encode($model->source_of_water_supply);
            $model->type_of_ownership = json_encode($model->type_of_ownership);
            $model->type_of_well = json_encode($model->type_of_well);
            $model->well_usage = json_encode($model->well_usage);
            $model->pump_required_priming = json_encode($model->pump_required_priming);
            $model->repair_done_within_2_months = json_encode($model->repair_done_within_2_months);
            $model->water_treated = json_encode($model->water_treated);
            $model->distance_from_well_of_the_following_in_meter = json_encode($model->distance_from_well_of_the_following_in_meter);
            $model->analysis_requested = json_encode($model->analysis_requested);
            $model->save();


            return $this->redirect(['view', 'id' => $model->id]);
        }

        $data['model'] = $model;
        $data['users'] = UserSearch::dropDown("patient");

        return $this->render('update', $data);
    }

    /**
     * Deletes an existing WaterLab model.
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
     * Finds the WaterLab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WaterLab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WaterLab::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
