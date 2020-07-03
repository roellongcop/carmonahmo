<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Notification;
use app\models\AppointmentSearch;
use app\models\FecalysisSearch;
use app\models\UrinalysisSearch;
use app\models\HematologySearch;
use app\models\PhysicalSearch;
use app\models\DentalSearch;
use app\models\MedicalSearch;
use app\models\UserSearch;
use app\models\BirthingSearch;
use app\models\DotsSearch;
use app\models\WaterLabSearch;

class DashboardController extends \yii\web\Controller
{
    
    
    public function beforeAction($action)
    {
        Yii::$app->template->IncomingAppointment(); 


        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return Yii::$app->template->behaviors();
    }

    public function actionIndex()
    { 
        $data['pending'] = count(AppointmentSearch::pending());
        $data['patients'] = count(UserSearch::patient());
        $data['birthing'] = count(BirthingSearch::patient());
        $data['staffs'] = count(UserSearch::staff());
        $data['total_appointments'] = count(AppointmentSearch::byUser());
        $data['total_physical'] = count(PhysicalSearch::byUser());
        $data['total_dental'] = count(DentalSearch::byUser());
        $data['total_medical'] = count(MedicalSearch::byUser());
        $data['total_dots'] = count(DotsSearch::byUser());
        $data['total_water'] = count(WaterLabSearch::byUser());
        $data['total_birthing'] = count(BirthingSearch::byUser());

        if (Yii::$app->user->identity->role->name != 'Patient') {
            return $this->render('admin_dashboard', $data);
        }

        return $this->render('index', $data);
    }

    public function actionGetReservationChart()
    {
        $data = AppointmentSearch::chart();

        return json_encode($data);
    }


    public function actionClearNotification()
    {
        Notification::updateAll(['status' => 1], ['user_id' => Yii::$app->user->identity->id]);

        return $this->redirect(['dashboard/index']);
    } 
    
    
    public function actionPatientChart()
    {  
        $data = [
            PhysicalSearch::totalPatient(),
            FecalysisSearch::totalPatient() + UrinalysisSearch::totalPatient() + HematologySearch::totalPatient(),
            DotsSearch::totalPatient(),
            BirthingSearch::totalPatient(),
            DentalSearch::totalPatient(),
            WaterLabSearch::totalPatient()
        ];


        return json_encode($data);
    }
    
    public function actionPhysical()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = PhysicalSearch::byMonth($i);
        }

        return json_encode($total);
    }
    
    public function actionClinical()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = FecalysisSearch::byMonth($i) + UrinalysisSearch::byMonth($i) + HematologySearch::byMonth($i);
        }

        return json_encode($total);
    }
    
    public function actionDots()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = DotsSearch::byMonth($i);
        }

        return json_encode($total);
    }
    
    public function actionBirthing()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = BirthingSearch::byMonth($i);
        }

        return json_encode($total);
    }
    
    public function actionDental()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = DentalSearch::byMonth($i);
        }

        return json_encode($total);
    }
    
    public function actionWater()
    {
        $total = [];

        for ($i=1; $i <= 12; $i++) { 
            $total[] = WaterLabSearch::byMonth($i);
        }

        return json_encode($total);
    }

}
