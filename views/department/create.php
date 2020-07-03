<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->params['page'] = 'Departments';
$this->title = 'Create Department';
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['/department']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create ibox float-e-margins ibox-content">
    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>
</div>
