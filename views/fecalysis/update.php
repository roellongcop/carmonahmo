<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fecalysis */
 
$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Fecalysis';
$this->title = 'Update Fecalysis: ' . $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Fecalysis', 'url' => ['/fecalysis']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients,
        'staffs' => $staffs,
    ]) ?>

</div>
