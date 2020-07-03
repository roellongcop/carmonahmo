<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UrinalysisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urinalysis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'reaction') ?>

    <?php // echo $form->field($model, 'transparency') ?>

    <?php // echo $form->field($model, 'specific_gravity') ?>

    <?php // echo $form->field($model, 'albumin') ?>

    <?php // echo $form->field($model, 'sugar') ?>

    <?php // echo $form->field($model, 'ketone') ?>

    <?php // echo $form->field($model, 'amorphus_urates') ?>

    <?php // echo $form->field($model, 'amorphus_phosphates') ?>

    <?php // echo $form->field($model, 'calcium_oxalates') ?>

    <?php // echo $form->field($model, 'uric_acid') ?>

    <?php // echo $form->field($model, 'triple_phosphates') ?>

    <?php // echo $form->field($model, 'hyaline') ?>

    <?php // echo $form->field($model, 'fine_granular') ?>

    <?php // echo $form->field($model, 'coarse_granular') ?>

    <?php // echo $form->field($model, 'wbc_casts') ?>

    <?php // echo $form->field($model, 'rbc_casts') ?>

    <?php // echo $form->field($model, 'waxy') ?>

    <?php // echo $form->field($model, 'pus_cells') ?>

    <?php // echo $form->field($model, 'red_blood_cells') ?>

    <?php // echo $form->field($model, 'ephithelial_cells') ?>

    <?php // echo $form->field($model, 'yeast_cells') ?>

    <?php // echo $form->field($model, 'renal_ephithelial_cells') ?>

    <?php // echo $form->field($model, 'mocous_threads') ?>

    <?php // echo $form->field($model, 'bacteria') ?>

    <?php // echo $form->field($model, 'pregnancy_test') ?>

    <?php // echo $form->field($model, 'pathologist_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
