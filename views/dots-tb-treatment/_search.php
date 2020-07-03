<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DotsTbTreatmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dots-tb-treatment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dots_id') ?>

    <?= $form->field($model, 'tb_case_number') ?>

    <?= $form->field($model, 'region') ?>

    <?= $form->field($model, 'name_of_dots_facility') ?>

    <?php // echo $form->field($model, 'bcg_scar') ?>

    <?php // echo $form->field($model, 'other_patient_details') ?>

    <?php // echo $form->field($model, 'diagnostic_test') ?>

    <?php // echo $form->field($model, 'diagnosis') ?>

    <?php // echo $form->field($model, 'history_of_anti_tb_drug_intake') ?>

    <?php // echo $form->field($model, 'bacteriological_status') ?>

    <?php // echo $form->field($model, 'classification_of_tb_disease') ?>

    <?php // echo $form->field($model, 'registeration_group') ?>

    <?php // echo $form->field($model, 'treatment_started') ?>

    <?php // echo $form->field($model, 'treatment_outcome') ?>

    <?php // echo $form->field($model, 'clinical_examination_before_and_during_treatment') ?>

    <?php // echo $form->field($model, 'dosage_and_preperation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
