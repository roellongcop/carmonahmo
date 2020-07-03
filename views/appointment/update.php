<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->params['page'] = 'Appointments';
$this->title = 'Update Appointment: ' . date('F d, Y', strtotime($model->scheduled_date));
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['/appointment']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appointment-update  ibox float-e-margins ibox-content">
    
    <?= $this->render('_form', [
        'model' => $model,
        'complaints' => $complaints
    ]) ?>

</div>
