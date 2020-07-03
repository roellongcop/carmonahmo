<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'chief_complaint') ?>

    <?= $form->field($model, 'start_of_pregnancy') ?>

    <?= $form->field($model, 'end_of_pregnancy') ?>

    <?php // echo $form->field($model, 'guardian_name') ?>

    <?php // echo $form->field($model, 'guardian_civil_status') ?>

    <?php // echo $form->field($model, 'guardian_gender') ?>

    <?php // echo $form->field($model, 'guardian_contact') ?>

    <?php // echo $form->field($model, 'guardian_age') ?>

    <?php // echo $form->field($model, 'guardian_relationship') ?>

    <?php // echo $form->field($model, 'guardian_address') ?>

    <?php // echo $form->field($model, 'date_added') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
