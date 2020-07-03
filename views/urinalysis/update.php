<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Urinalysis */
 

$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Urinalysis';
$this->title = 'Update Urinalysis: ' . $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Urinalysis', 'url' => ['/urinalysis']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients,
        'staffs' => $staffs,
    ]) ?>

</div>
