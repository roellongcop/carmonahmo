<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->params['page'] = 'Departments';
$this->title = 'Update Department: ' . ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['/department']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-update ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
