<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registration Success';
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
                        <h5>Registration Success</h5> 
                    </div>
                    <div class="ibox-content">

                        <p>Please check your email for your credentials.</p>
                        
                        <p class="m-t"> 
                            <small>
                                <?= Yii::$app->template->getAbout() ?> &copy; 
                                <?= date('Y') ?>
                            </small> 
                        </p>
                        
                        <br> <br> <br>
                        
                        <?= Html::a('Home', ['/'], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br>
</section>
</div>
