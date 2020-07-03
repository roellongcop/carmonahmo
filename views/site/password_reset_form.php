<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Password Reset Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold title"><?= Html::encode($this->title) ?></h2>
                Please contact your administrator to get your verification code.
                Only the administrator can get it.
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <?php $form = ActiveForm::begin(['class' => 'm-t']); ?>
                        <?= $form->field($model, 'authKey')->textInput(['placeholder' => 'Enter Code']) ?> 
                        <?= Html::submitButton('Send Code', ['class' => 'btn btn-primary']) ?>
                    <?php ActiveForm::end(); ?>
                    <p class="m-t">
                        <?= Html::a('Back to Login', ['/login']) ?>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright <?= Yii::$app->template->getAbout()['name'] ?>
            </div>
            <div class="col-md-6 text-right">
               <small> <i class="fa fa-envelope"></i> <?= Yii::$app->template->getAbout()['email'] ?></small>
            </div>
        </div>
    </div>

</div>
