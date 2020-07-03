<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingMonitoringSheetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-monitoring-sheet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'birthing_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'blood_pressure') ?>

    <?= $form->field($model, 'pulse') ?>

    <?php // echo $form->field($model, 'respiration') ?>

    <?php // echo $form->field($model, 'urine_output') ?>

    <?php // echo $form->field($model, 'cvp_level') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
