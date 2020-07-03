<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dental */

$this->params['page'] = 'Dental';
$this->title = 'Update Dental: ' . ucwords($model->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Dental', 'url' => ['/dental']];
$this->params['breadcrumbs'][] = ['label' => $model->patientName, 'url' => ['view', 'id' => $model->patient->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-update ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
