<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FecalysisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fecalysis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'consistency') ?>

    <?php // echo $form->field($model, 'pus_cells') ?>

    <?php // echo $form->field($model, 'red_cells') ?>

    <?php // echo $form->field($model, 'fat_globules') ?>

    <?php // echo $form->field($model, 'yeast_cells') ?>

    <?php // echo $form->field($model, 'bateria') ?>

    <?php // echo $form->field($model, 'starch_granules') ?>

    <?php // echo $form->field($model, 'muscle_fiber') ?>

    <?php // echo $form->field($model, 'vegetable_cells') ?>

    <?php // echo $form->field($model, 'parasite') ?>

    <?php // echo $form->field($model, 'amoeba') ?>

    <?php // echo $form->field($model, 'others') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
