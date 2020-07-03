<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HematologySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hematology-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'hemoglobin') ?>

    <?= $form->field($model, 'hematocrit') ?>

    <?php // echo $form->field($model, 'leokocyte') ?>

    <?php // echo $form->field($model, 'erythrocyte') ?>

    <?php // echo $form->field($model, 'reticulocyte') ?>

    <?php // echo $form->field($model, 'platelet') ?>

    <?php // echo $form->field($model, 'esr') ?>

    <?php // echo $form->field($model, 'bleeding_time') ?>

    <?php // echo $form->field($model, 'clotting_time') ?>

    <?php // echo $form->field($model, 'bands') ?>

    <?php // echo $form->field($model, 'segmenters') ?>

    <?php // echo $form->field($model, 'eosinophil') ?>

    <?php // echo $form->field($model, 'basophil') ?>

    <?php // echo $form->field($model, 'lymphocytes') ?>

    <?php // echo $form->field($model, 'monocytes') ?>

    <?php // echo $form->field($model, 'nucleated_rbc') ?>

    <?php // echo $form->field($model, 'malarial_smear') ?>

    <?php // echo $form->field($model, 'toxic_granulation') ?>

    <?php // echo $form->field($model, 'blood_rh_type') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
