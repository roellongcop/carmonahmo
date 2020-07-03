<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Update User: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Update'];
$this->params['breadcrumbs'][] =  ['label' => $model->username];
$this->params['page'] = 'Users';
?>
<div class="user-update ibox float-e-margins ibox-content">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
