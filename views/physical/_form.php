<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Physical */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="physical-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <p class="col-md-12 lead">PHYSICAL DATA</p>
        <div class="col-md-6">
            <?= $form->field($model, 'patient_id')
            ->dropDownList($patients,  
                ['prompt' => 'Select Patient']
            )?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput([
                'type' => 'date'
            ]) ?>
            <?= $form->field($model, 'time')->textInput([
                'type' => 'time'
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'diagnosis')->textarea(['rows' => 5]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'bp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'pr')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'temp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'wt')->textInput(['maxlength' => true]) ?>
        </div>
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
