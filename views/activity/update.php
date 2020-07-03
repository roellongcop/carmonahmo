<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */

$this->params['page'] = 'Activities';
$this->title = 'Update Activity: ' . ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['/activity']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="activity-update ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
