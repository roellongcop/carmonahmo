<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dots */

$this->params['page'] = 'Tb';
$this->title = 'Update Dots: '.  ucwords($model->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Dots', 'url' => ['/dots']];
$this->params['breadcrumbs'][] = ['label' => $model->patientName, 'url' => ['view', 'id' => $model->patient->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="activity-index ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>



