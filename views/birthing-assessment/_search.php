<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingAssessmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-assessment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'birthing_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'assessment') ?>

    <?= $form->field($model, 'chief_complaint') ?>

    <?php // echo $form->field($model, 'intervention') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
