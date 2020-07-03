<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->params['page'] = 'Appointments';
$this->title = 'Create Appointment';
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['/appointment']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-create ibox float-e-margins ibox-content">
	<?= ($error) ? '<div class="alert alert-danger">' . $error . '</div>' : '' ?>
	

    <?= $this->render('_form', [
        'model' => $model,
        'complaints' => $complaints,
        'limit' => $limit,
        //'item_time' => $item_time
    ]) ?>

</div>
