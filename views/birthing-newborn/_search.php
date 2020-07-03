<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingNewbornSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-newborn-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'birthing_id') ?>

    <?= $form->field($model, 'baby_name') ?>

    <?= $form->field($model, 'date_delivered') ?>

    <?= $form->field($model, 'time_delivered') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'delivery_type') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'apgar_score') ?>

    <?php // echo $form->field($model, 'head_circumference') ?>

    <?php // echo $form->field($model, 'abdominal_circumference') ?>

    <?php // echo $form->field($model, 'chest_circumference') ?>

    <?php // echo $form->field($model, 'body_length') ?>

    <?php // echo $form->field($model, 'procedures') ?>

    <?php // echo $form->field($model, 'medications') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
