<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hematology */
 
$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Hematology';
$this->title = 'Update Hematology: ' . $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Hematology', 'url' => ['/hematology']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients,
        'staffs' => $staffs,
    ]) ?>

</div>