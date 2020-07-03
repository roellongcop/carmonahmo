<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingIntravenousFluidSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-intravenous-fluid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'birthing_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'bag_no') ?>

    <?= $form->field($model, 'solution') ?>

    <?php // echo $form->field($model, 'blood') ?>

    <?php // echo $form->field($model, 'time_started') ?>

    <?php // echo $form->field($model, 'time_end') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
