<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Birthing */

$this->params['page'] = 'Birthing'; 
$this->title = 'Update Birthing: ' . $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Birthings', 'url' => ['/birthing']]; 
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="birthing-update ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients
    ]) ?>

</div>
