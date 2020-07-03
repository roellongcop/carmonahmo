<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingMonitoringSheet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-monitoring-sheet-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'blood_pressure')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'pulse')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'respiration')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'urine_output')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'cvp_level')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-8">
            <?= $form->field($model, 'others')->textarea(['rows' => 5]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?php if(! $model->isNewRecord) : ?>
                <?= $form->field($model, 'status')
                    ->dropDownList([
                        0 => 'Active', 
                        1 => 'Not-Active', 
                    ], ['prompt' => 'Select Status']
                ) ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
