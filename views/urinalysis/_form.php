<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Urinalysis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urinalysis-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <p class="col-md-12 lead">URINALYSIS DATA</p>
        <div class="col-md-6">
            <?= $form->field($model, 'patient_id')
            ->dropDownList($patients,  
                ['prompt' => 'Select Patient']
            )?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'staff_id')
            ->dropDownList($staffs,  
                ['prompt' => 'Select Requested By']
            ) ?>
        </div>
    </div>

    <hr>
    <div class="row">
        <p class="col-md-12 lead">PHYSICAL</p>
        <div class="col-md-3">
            <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'reaction')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'transparency')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'specific_gravity')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <hr>
    <div class="row">
        <p class="col-md-12 lead">CHEMICAL</p>
        <div class="col-md-4">
            <?= $form->field($model, 'albumin')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'sugar')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'ketone')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <hr>
    <div class="row">
        <p class="col-md-12 lead">CRYSTALS</p>
        <div class="col-md-4">
            <?= $form->field($model, 'amorphus_urates')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'amorphus_phosphates')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'calcium_oxalates')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'uric_acid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'triple_phosphates')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <hr>
    <div class="row">
        <p class="col-md-12 lead">CELLS</p>
        <div class="col-md-4">
            <?= $form->field($model, 'pus_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'red_blood_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'ephithelial_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'yeast_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'renal_ephithelial_cells')->textInput(['maxlength' => true]) ?>
        </div>
    </div>



    <hr>
    <div class="row">
        <p class="col-md-12 lead">CASTS</p>
        <div class="col-md-4">
            <?= $form->field($model, 'hyaline')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'fine_granular')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'coarse_granular')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'wbc_casts')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'rbc_casts')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'waxy')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <hr>
    <div class="row">
        <p class="col-md-12 lead">OTHERS</p>
        <div class="col-md-6">
            <?= $form->field($model, 'mocous_threads')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pregnancy_test')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'bacteria')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pathologist_id')
            ->dropDownList($staffs,  
                ['prompt' => 'Select Pathologist']
            )?>
            
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
