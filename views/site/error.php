<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = "Something Went Wrong!";
?> 
	<div class="middle-box text-center animated fadeInDown">
        <h1 style="margin-top: -200px">404</h1>
        <h3 class="font-bold"> <?= nl2br(Html::encode($message)) ?></h3>
        <div class="error-desc">
            Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app. <br><br>

            <?= (Yii::$app->user->isGuest) ? 
	            Html::a('Go to Login', ['/login'], ['class' => 'btn btn-primary btn-block']) :
	            Html::a('Go to Dashboard', ['/dashboard'], ['class' => 'btn btn-primary btn-block']);
            ?>
        </div>
    </div>
