<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhysicalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="physical-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'occupation') ?>

    <?= $form->field($model, 'diagnosis') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'bp') ?>

    <?php // echo $form->field($model, 'pr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'temp') ?>

    <?php // echo $form->field($model, 'wt') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
