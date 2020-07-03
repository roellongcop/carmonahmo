<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medical */

$this->params['page'] = 'Medical';
$this->title = 'Update Medical Checkups: ' . $model->patientName;
$this->params['breadcrumbs'][] = ['label' => 'Checkups', 'url' => ['/medical']];
$this->params['breadcrumbs'][] = ['label' => $model->patientName, 'url' => ['view', 'id' => $model->patient->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-update ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients
    ]) ?>

</div>
