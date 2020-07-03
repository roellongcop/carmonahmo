<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hematology */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hematology-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <p class="col-md-12 lead">HEMATOLOGY DATA</p>
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
        <p class="col-md-12 lead">COMPONENT</p>
        <div class="col-md-4">
            <?= $form->field($model, 'hemoglobin')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'hematocrit')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'leokocyte')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'erythrocyte')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'reticulocyte')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'platelet')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'esr')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'bleeding_time')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'clotting_time')->textInput(['maxlength' => true]) ?>
        </div>
    </div>




    <hr>
    <div class="row">
        <p class="col-md-12 lead">LEUKOCYTE DIFFERENTIAL COUNT</p>
        <div class="col-md-4">
            <?= $form->field($model, 'bands')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'segmenters')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'eosinophil')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'basophil')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'lymphocytes')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'monocytes')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'nucleated_rbc')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'malarial_smear')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'pathologist_id')
            ->dropDownList($staffs,  
                ['prompt' => 'Select Pathologist']
            )?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'blood_rh_type')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'others')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'toxic_granulation')->textarea(['rows' => 6]) ?>
            
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
