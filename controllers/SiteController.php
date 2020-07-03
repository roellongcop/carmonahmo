<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\AboutSearch;
use app\models\ActivitySearch;
use app\models\UserSearch;
use app\models\ComplaintSearch;
use app\models\AppointmentSearch;
use app\models\User;
use app\models\Appointment;
use app\models\LoginForm;
use app\models\Role;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return Yii::$app->template->behaviors(['login', 'check', 'index', 'register']);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action)
    {
        Yii::$app->template->IncomingAppointment(); 

        if ($action->id == 'error') {
            $this->layout = 'login';
        }


        return parent::beforeAction($action);
    }


   public function actionCheck($date){
       
       
     $this->layout = 'login';
     $rtn= "<option> Select Time. </option>";
    $data  = Yii::$app->params['times'];
       
        $checkTime = Yii::$app->db->createCommand('SELECT scheduled_time FROM hmo_appointment where date(scheduled_date) = date('.$date.') and status != 0')->queryAll();
            
   
        if(sizeof($checkTime) > 0){
            foreach ($checkTime as $key => $value) {
                if(in_array($value['scheduled_time'],$data)){
                    unset($data[$value['scheduled_time']]);
                }
            }
        }

        if(sizeof($data) == 0){
          $rtn .=  " <option> Sorry No available time for this day. </option>";    
        }   
        else{
            
            foreach ($data as $key => $value) {
                $rtn .= "<option value='" . $value . "'>" . $value . "</option>";
            }
        }
        
    
    return $rtn;
   }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'home';
        $model = new Appointment();
        
        $data['model']      = $model;
        $data['complaints'] = ComplaintSearch::dropDown();
        $data['about']      = AboutSearch::all();
        $data['activities'] = ActivitySearch::all();
        $data['doctors']    = UserSearch::all('user_type', 1);
        $data['limit']      = false;
        
        // $data['item_time']  = Yii::$app->params['times'];
       
        // $checkTime = Yii::$app->db->createCommand('SELECT scheduled_time FROM hmo_appointment where date(date_created) = date(now()) and status != 0')->queryAll();
        
        // if(sizeof($checkTime) > 0){
        //     foreach ($checkTime as $key => $value) {
        //         if(in_array($value['scheduled_time'],$data['item_time'])){
        //             unset($data['item_time'][$value['scheduled_time']]);
        //         }
        //     }
        // }

        // if(sizeof($data['item_time']) == 0){
        //         $data['limit'] = true;
        //         return $this->render('index', $data);            
        // }

        $checkCountAppointment = Yii::$app->db->createCommand('SELECT count(*) as cnt FROM hmo_appointment where date(date_created) = date(now()) and status != 2 ')->queryAll();

        if(intval($checkCountAppointment[0]['cnt']) >= 200){
            $data['limit'] = true;
            return $this->render('index', $data);
        }


        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $user = User::findOne(['authkey' => $model->authkey]);

            if (AppointmentSearch::hasNoPending($user->id)) {

                if (! AppointmentSearch::oneWeek($user->id)) {

                    if (! AppointmentSearch::maximum($model)) {
                        $model->user_id = $user->id;

                        $model->save();
                        Yii::$app->session->setFlash('success', 'Successfully Created Appointment');

                        Yii::$app->template->writeNotif($user->id, 'You created an appointment');

                        $admins = User::findAll(['user_type' => 2, 'status' => 0]);

                        foreach ($admins as $admin) {
                            Yii::$app->template->writeNotif($admin->id,  $model->patientName . ' created an appointment');
                        }

                        
                        if ($model->login($user)) {
                            return $this->redirect(['dashboard/index']);
                        } 
                    }
                    else {
                        Yii::$app->session->setFlash('danger', 'maximum Appointment per day Reached');
                        return $this->redirect(['site/maximum']);
                    }
                }
                else {
                    Yii::$app->session->setFlash('danger', 'Unable to appoint within a week');
                    return $this->redirect(['site/has-week']);
                }
                
            } 
            else {


                return $this->redirect(['site/has-pending-appointment']);
            }

        }


        return $this->render('index', $data);
    }

    public function actionHasWeek()
    {
        $this->layout = 'login';
        return $this->render('week');

    }


    public function actionMaximum()
    {
        $this->layout = 'login';
        return $this->render('maximum');
    }




    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'login';

        $model = new LoginForm();



        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/dashboard']);
        }

        $model->password = '';

        return $this->render('login', ['model' => $model]);
    }



    public function actionRegistrationSuccessfull($authkey, $password, $username)
    {  
        $this->layout = 'login';
        return $this->render('registration_success', [
            'authkey' => $authkey, 
            'password' => $password, 
            'username' => $username,
        ]);
    }

    public function actionHasPendingAppointment()
    {
        $this->layout = 'login';
        return $this->render('has_pending_appointment');
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionRegister()
    { 
        $this->layout = 'login';
        $model = new User();
        $model->user_type = 0;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->fullname = $model->fname .'_' . $model->mname . '_' . $model->lname;

            $model->address = $model->blk .'_' . $model->lot . '_' . $model->brgy . '_' . $model->city . '_' . $model->province;
            $password = strtolower(Yii::$app->security->generateRandomString(6));
            $username = strtolower(Yii::$app->security->generateRandomString(6));

            $model->password = $password;
            $model->username = $username;

            $model->user_type = Role::find()->where(['name' => 'Patient'])->one()->id;
            
            $model->save();
            
            if(isset($model->email) && $model->email) {
                $mail = Yii::$app->mailer->compose('registration-success', [
                    'authkey' => $model->authkey, 
                    'password' => $password, 
                    'username' => $model->username,    
                ])
                ->setFrom('carmonahmo@gmail.com')
                ->setTo($model->email)
                ->setSubject('MHO | Registration') 
                ->send();
                
                 return $this->redirect(['confirm-email']);
                
            } else {
                return $this->redirect([
                    'registration-successfull', 
                    'authkey' => $model->authkey, 
                    'password' => $password, 
                    'username' => $model->username,
                ]);
            }

            
        }
        

        return $this->render('registration_form', [
            'model' => $model,
        ]);
    }
    
    public function actionConfirmEmail()
    {
        $this->layout = 'login';
        return $this->render('email-confirm');
    }
    

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionPasswordResetForm()
    {
        $this->layout = 'login';

        $model = new PasswordResetForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            return $this->redirect([
                '/new-password-form', 
                'authKey' => $model->authKey
            ]);
        }

        return $this->render('password_reset_form', [
            'model' => $model,
        ]);
    }


    public function actionNewPasswordForm($authKey)
    {
        $this->layout = 'login';

        $model = new NewPasswordForm();
        $user = User::findOne(['authKey' => $authKey]);

        if (! $user) {
            return $this->goHome();
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user->password_confirm = $model->password_confirm;
            $user->password = $model->password;
            $user->save();
            Yii::$app->session->setFlash('success', 'Password Updated.');
            $this->redirect(['/login']);
        }

        return $this->render('new_password_form', [
            'model' => $model,
            'user' => $user
        ]);
    }


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
