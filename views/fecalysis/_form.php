<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fecalysis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fecalysis-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <p class="col-md-12 lead">FECALYSIS DATA</p>
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
        <p class="col-md-12 lead">MACROSCOPIC</p>
        <div class="col-md-6">
            <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'consistency')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <hr>

    <div class="row">
        <p class="col-md-12 lead">MICROSCOPIC</p>
        <div class="col-md-4">
            <?= $form->field($model, 'pus_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'red_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'fat_globules')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'yeast_cells')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'bateria')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'starch_granules')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'muscle_fiber')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-8">
            <?= $form->field($model, 'vegetable_cells')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'parasite')->textarea(['rows' => 5]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'amoeba')->textarea(['rows' => 5]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'others')->textarea(['rows' => 5]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'pathologist_id')
            ->dropDownList($staffs,  
                ['prompt' => 'Select Pathologist']
            )?>
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
