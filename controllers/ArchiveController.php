<?php

namespace app\controllers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;


/**
 * ComplaintController implements the CRUD actions for Complaint model.
 */
class ArchiveController extends Controller
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
     * Lists all Complaint models.
     * @return mixed
     */
    public function actionIndex()
    {
      return $this->render('index');
    }


    public function actionBackup(){
        Yii::$app->template->backupDb();
        return $this->render('index');
    }
    
    public function actionRestore($path){
       
       $sql = file_get_contents('backup/'.$path);
       Yii::$app->db->createCommand($sql)->execute();
        return $this->render('index',['isRestore' => true]);
    }
    
    public function actionRemove($path){
        
        unlink('backup/'.$path);
       // Yii::$app->template->backupDb();
       Yii::$app->session->setFlash('success', $path . " successfully remove.");
        return $this->render('index',['isRemove' => true]);
    }
}

