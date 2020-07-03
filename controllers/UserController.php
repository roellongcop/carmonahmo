<?php

namespace app\controllers;

use Yii;
use DateTime;
use app\models\User;
use app\models\UserSearch;
use app\models\AccountForm;
use app\models\BirthingSearch;
use app\models\BirthingAssessmentSearch;
use app\models\BirthingIntravenousFluidSearch;
use app\models\BirthingMonitoringSheetSearch;
use app\models\BirthingWeightProgressSearch;
use app\models\BirthingPhysicianOrderSearch;
use app\models\BirthingNewbornSearch;
use app\models\FecalysisSearch;
use app\models\UrinalysisSearch;
use app\models\HematologySearch;
use app\models\DotsSearch;
use app\models\DotsTbTreatmentSearch;
use app\models\DotsOpdRecordSearch;
use app\models\WaterLabSearch;
use app\models\PhysicalSearch;
use app\models\DentalSearch;
use app\models\MedicalSearch;
use app\models\UploadForm;
use yii\web\UploadedFile;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return Yii::$app->template->behaviors(['compute-age']);
    }

    public function beforeAction($action)
    {
        Yii::$app->template->IncomingAppointment(); 


        return parent::beforeAction($action);
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        
        $searchModel = new UserSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            // 'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    { 
        $data['records'][] = BirthingSearch::records($id);
        $data['records'][] = BirthingAssessmentSearch::records($id);
        $data['records'][] = BirthingIntravenousFluidSearch::records($id);
        $data['records'][] = BirthingMonitoringSheetSearch::records($id);
        $data['records'][] = BirthingWeightProgressSearch::records($id);
        $data['records'][] = BirthingPhysicianOrderSearch::records($id);
        $data['records'][] = BirthingNewbornSearch::records($id);
        $data['records'][] = FecalysisSearch::records($id);
        $data['records'][] = UrinalysisSearch::records($id);
        $data['records'][] = HematologySearch::records($id);
        $data['records'][] = DotsSearch::records($id);
        $data['records'][] = DotsTbTreatmentSearch::records($id);
        $data['records'][] = DotsOpdRecordSearch::records($id);
        $data['records'][] = WaterLabSearch::records($id);
        $data['records'][] = PhysicalSearch::records($id);
        $data['records'][] = DentalSearch::records($id);
        $data['records'][] = MedicalSearch::records($id);
 
        $data['model'] = $this->findModel($id);

        return $this->render('view', $data);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->fullname = $model->fname . '_' . $model->mname . '_'. $model->lname;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
        
        $password = strtolower(Yii::$app->security->generateRandomString(6));
        $username = strtolower(Yii::$app->security->generateRandomString(6));

        $model->password = $password;
        $model->username = $username;
        

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
           if ($id == Yii::$app->user->identity->id) {
                Yii::$app->user->login($model, 0);
            }
            
            Yii::$app->template->insertLog('Update User : ' . $model->username);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        if ($id == Yii::$app->user->identity->id) {
            return $this->render('update_profile', [
                'model' => $model,
            ]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete()
    {
        // $this->findModel($id)->delete();
        $id = Yii::$app->request->post('id');
        $model = $this->findModel($id);
        $model->is_deleted = 1;
        $model->password_confirm = $model->password;
        $model->save();

        Yii::$app->template->insertLog('Delete User : ' . $model->username);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDetail($id)
    {
        $this->layout = false;
        
        return $this->render('_detail', [
            'model' => $this->findModel($id)
        ]);
    }


    public function actionComputeAge()
    {
        // ob_start();
        $birthday = $_POST['birthday'];

        $birthday = new DateTime($birthday);
        $current_date = new DateTime(); 

        $age = $birthday->diff($current_date);

        return $age->format("%Y");

    }
    


    public function actionProfile()
    {
        $model = $this->findModel($this->user->identity->id);
        $account = new AccountForm();
        $modelUpload = new UploadForm();
        $model->fname = $model->firstname;
        $model->mname = $model->middlename;
        $model->lname = $model->lastname;


        $model->blk = $model->_blk;
        $model->lot = $model->_lot;
        $model->brgy = $model->_brgy; 
        $model->city = $model->_city;
        $model->province = $model->_province;
        
        


        if (Yii::$app->request->isPost) {
            $model->address = $model->blk .'_' . $model->lot . '_' . $model->brgy . '_' . $model->city . '_' . $model->province;
            $modelUpload->imageFile = UploadedFile::getInstance($modelUpload, 'imageFile');
            if( $modelUpload->imageFile){
                if ($path = $modelUpload->upload($this->user->identity->id)) {
                    $model->image_path = $path;
                    $model->save(false);
                }
            }
        }

        

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->address = $model->blk .'_' . $model->lot . '_' . $model->brgy . '_' . $model->city . '_' . $model->province;
            $model->fullname = $model->fname . '_' . $model->mname . '_'. $model->lname;
            $model->update_type = 1;
            $model->save();
             
            $this->refresh();
        }

        if ($account->load(Yii::$app->request->post()) && $account->validate()) {
            $model->username = $account->username;
            $model->password = $account->password;
            $model->setPassword();
            $model->access_token = $model->createString();

            $model->save();
            $this->refresh();

        }

      
        return $this->render('update_profile', [
            'model' => $model,
            'account' => $account,
            'modelUpload' => $modelUpload
        ]);
    }

    public function actionShow($id)
    {
       $user = User::find()
            ->where(['id' => $id])
            ->asArray()
            ->one();

        $user['sex'] = Yii::$app->params['gender'][$user['gender']];
       echo json_encode($user);
    }

    public function actionFindRecords()
    {
        $post = Yii::$app->request->post();

        if ($post['title'] == 'Birthing Records') {
            $records = BirthingSearch::records($post['id'], false);
            
            return $this->renderPartial('_birthing', ['records' => $records]);
        }
    }


    public function actionPrint($id)
    {
        return $this->render('print', [
            'model' => $this->findModel($id),
        ]);
    }
}
