<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WaterLab */

$this->params['page'] = 'Waterlab';
$this->title = 'Update Water Lab: '.ucwords($model->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Water Laboratory', 'url' => ['/water-lab']];
	$this->params['breadcrumbs'][] = 'Update';

?>
<div class="activity-index ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users
    ]) ?>

</div>
