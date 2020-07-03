<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DotsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dots-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'name_of_collection_unit') ?>

    <?= $form->field($model, 'date_of_request') ?>

    <?= $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'telephone_number') ?>

    <?php // echo $form->field($model, 'history_of_treatment') ?>

    <?php // echo $form->field($model, 'disease_classification') ?>

    <?php // echo $form->field($model, 'reason_for_examination') ?>

    <?php // echo $form->field($model, 'type_of_specimen') ?>

    <?php // echo $form->field($model, 'test_requested') ?>

    <?php // echo $form->field($model, 'specimen') ?>

    <?php // echo $form->field($model, 'date_of_collection') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
