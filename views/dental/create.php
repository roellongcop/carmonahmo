<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dental */

$this->params['page'] = 'Dental';
$this->title = 'Create Department';
$this->params['breadcrumbs'][] = ['label' => 'Dental', 'url' => ['/dental']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
