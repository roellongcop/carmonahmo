<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedicalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'assessment_date') ?>

    <?= $form->field($model, 'chief_complaint') ?>

    <?= $form->field($model, 'primary_diagnosis') ?>

    <?php // echo $form->field($model, 'clinical_history') ?>

    <?php // echo $form->field($model, 'other_diagnosis') ?>

    <?php // echo $form->field($model, 'treatment') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
