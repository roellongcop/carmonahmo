<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<section class="banner-area relative" style="background: url('<?= Yii::$app->template->getAbout('image_path') ?>') no-repeat center;  background-size: cover;">
    <div class="overlay overlay-bg"></div>  

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="ibox float-e-margins"> <br> <br> <br> <br> <br> <br>
                    <div class="ibox-title">
                        <h5>Login Form</h5> 
                    </div>
                    <div class="ibox-content">

                        <p>Fillup username and password.</p>
                        <?php $form = ActiveForm::begin(['class' => 'm-t']); ?>
                            <?= $form->field($model, 'username')->textInput() ?>
                            <?= $form->field($model, 'password')->passwordInput() ?>
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        <?php ActiveForm::end(); ?>
                        <p class="m-t"> 
                            <small>
                                <?= Yii::$app->template->getAbout() ?> &copy; 
                                <?= date('Y') ?>
                            </small> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br>
</section>
</div>
