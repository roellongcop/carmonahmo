<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Booking Failed</h2>
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
                        <h3 class="logo-name" style="font-size: 80px;">
                            Booking Appointment Failed
                        </h3>
                        <hr>

                        <h3>Seems like you already have a <b>PENDING</b> appointment</h3>
                        <p>Just wait for your approval through email.
                        </p>


                        <?= Html::a('Home Page', ['/'], ['class' => 'btn btn-primary']) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
