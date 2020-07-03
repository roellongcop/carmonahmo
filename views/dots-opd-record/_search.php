<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DotsOpdRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dots-opd-record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dots_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'bp') ?>

    <?= $form->field($model, 'wt') ?>

    <?php // echo $form->field($model, 'pr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 't') ?>

    <?php // echo $form->field($model, 'S') ?>

    <?php // echo $form->field($model, 'O') ?>

    <?php // echo $form->field($model, 'A') ?>

    <?php // echo $form->field($model, 'P') ?>

    <?php // echo $form->field($model, 'smoking_hx') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
