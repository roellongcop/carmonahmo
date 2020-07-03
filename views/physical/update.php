<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Physical */

$this->params['page'] = 'Physical';
$this->title = 'Update Physical: ' . $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Physical', 'url' => ['/physical']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-index ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients,
    ]) ?>

</div>
