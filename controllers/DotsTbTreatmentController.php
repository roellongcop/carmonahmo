<?php

namespace app\controllers;

use Yii;
use app\models\DotsTbTreatment;
use app\models\DotsTbTreatmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DotsTbTreatmentController implements the CRUD actions for DotsTbTreatment model.
 */
class DotsTbTreatmentController extends Controller
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
     * Lists all DotsTbTreatment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DotsTbTreatmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DotsTbTreatment model.
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
     * Creates a new DotsTbTreatment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($dots_id)
    {
        $model = new DotsTbTreatment();
        $model->dots_id = $dots_id;
         if ($model->load(Yii::$app->request->post())) {
            $model->other_patient_details = json_encode($model->other_patient_details);
            $model->diagnostic_test = json_encode($model->diagnostic_test);
            $model->clinical_examination_before_and_during_treatment = json_encode($model->clinical_examination_before_and_during_treatment);
            $model->dosage_and_preperation = json_encode($model->dosage_and_preperation);
            $model->house_hold_members = json_encode($model->house_hold_members);
            $model->tb_disease_treatment_regimen = json_encode($model->tb_disease_treatment_regimen);
            $model->save(false);

             return $this->redirect(['view', 'id' => $model->id]);
         }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DotsTbTreatment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $model->other_patient_details = json_encode($model->other_patient_details);
            $model->diagnostic_test = json_encode($model->diagnostic_test);
            $model->clinical_examination_before_and_during_treatment = json_encode($model->clinical_examination_before_and_during_treatment);
            $model->dosage_and_preperation = json_encode($model->dosage_and_preperation);

            $model->house_hold_members = json_encode($model->house_hold_members);
            $model->tb_disease_treatment_regimen = json_encode($model->tb_disease_treatment_regimen);
            
            $model->save(false);
           
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DotsTbTreatment model.
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
     * Finds the DotsTbTreatment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DotsTbTreatment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DotsTbTreatment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
