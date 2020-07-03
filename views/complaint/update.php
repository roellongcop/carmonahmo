<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Complaint */

$this->params['page'] = 'Complaints';
$this->title = 'Update Complaint: ' . ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Complaints', 'url' => ['/complaint']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="complaint-update ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'departments' => $departments,
    ]) ?>

</div>
