<?php

use yii\helpers\Html;

$this->title = "Registration Success"
?>

<section class="banner-area relative" style="background: url('<?= Yii::$app->template->getAbout('image_path') ?>') no-repeat center;  background-size: cover;">
    <div class="overlay overlay-bg"></div>  
    <div class="row wrapper border-bottom white-bg page-heading"  style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="col-lg-10">
            <h2 style="color: #fff"> 
                <img 
                src="<?= \yii\helpers\Url::home('https') ?>/resources/backend/img/images.jpg"
                width="45"
                height="45"
                > 
                Registration Success
            </h2>
        </div> 
    </div>
    <div class="site-register">

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                        </div>
                        <div class="ibox-content">

                            <div class="row">  
                                <h4 class="logo-name" style="font-size: 40px;">Registration Success</h4>

                                <h3>You've Succesfully Registerred as Patient</h3>
                                <p>This are your credentials. You can now Book an appointment
                                </p>

                                <hr>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Verification Code</th>
                                        <td> <?= $authkey ?></td>
                                    </tr>

                                    <tr>
                                        <th>Username</th>
                                        <td> <?= $username ?></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td> <?= $password ?></td>
                                    </tr>
                                </table>
                                <hr>

                                <?= Html::a('Book an Appointment',\yii\helpers\Url::home('https'), [
                                    'target' => '_blank',
                                    'class' => 'btn btn-primary'
                                ]) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>