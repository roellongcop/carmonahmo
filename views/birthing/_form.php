<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Birthing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-form">

    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <p class="lead col-md-12">Patient Information</p>
            <div class="col-md-4">
                <?= $form->field($model, 'patient_id')
                    ->dropDownList($patients,  
                        ['prompt' => 'Select Patient']
                    )
                ?>
                <?= $form->field($model, 'start_of_pregnancy')->textInput(['type' => 'date']) ?>

                <?= $form->field($model, 'end_of_pregnancy')->textInput(['type' => 'date']) ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'chief_complaint')->textarea(['rows' => 8]) ?>
            </div>
        </div>
       

        <hr>


        <div class="row">
            <p class="lead col-md-12">Guradian Information</p>
            <div class="col-md-4">
                <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'guardian_gender')->DropDownList([
                    1 => 'Male',
                    2 => 'Female'
                ], ['prompt' => 'Select Gender']) ?>
            </div>

            <div class="col-md-4">
                <?= $form->field($model, 'guardian_relationship')->DropDownList([
                    1 => 'Father',
                    2 => 'Mother',
                    3 => 'Cousin',
                    4 => 'Wife',
                    5 => 'Husband',
                ], ['prompt' => 'Select Relationship']) ?>
            </div>
        </div>
        
        <hr>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'guardian_civil_status')->DropDownList([
                    1 => 'Single',
                    2 => 'Married',
                    3 => 'Widowed',
                ], ['prompt' => 'Select Civil Status']) ?>

                <?= $form->field($model, 'guardian_contact')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'guardian_age')->textInput() ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'guardian_address')->textarea(['rows' => 8]) ?>
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
