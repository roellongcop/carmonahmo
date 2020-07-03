<?php

namespace app\controllers;

use Yii;
use app\models\WaterLab; 
use app\models\Dots; 
use app\models\Medical; 
use app\models\Birthing; 
use app\models\Dental; 
use yii\web\Controller;
use yii\web\NotFoundHttpException; 
/**
 * PhysicalController implements the CRUD actions for Physical model.
 */
class RecordsController extends Controller
{
    
    public function behaviors()
    {
        return Yii::$app->template->behaviors();
    }
    /**
     * Lists all Physical models.
     * @return mixed
     */
    public function actionIndex()
    {
        $data['birthing'] = Birthing::find(['status' => 0])->groupBy('patient_id')->all();
        $data['dental'] = Dental::find(['status' => 0])->groupBy('patient_id')->all();
        $data['medical'] = Medical::find(['status' => 0])->groupBy('patient_id')->all();
        $data['dots'] = Dots::find()->groupBy('patient_id')->all();
        $data['waterlab'] = WaterLab::find(['status' => 0])->groupBy('patient_id')->all();

        return $this->render('index', $data);
    }

    public function beforeAction($action)
    {
        Yii::$app->template->IncomingAppointment(); 


        return parent::beforeAction($action);
    }

}