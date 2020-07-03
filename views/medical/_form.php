<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Medical */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medical-form">

    <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'patient_id')
                    ->dropDownList($patients,  
                        ['prompt' => 'Select Patient']
                    )
                ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'assessment_date')->textInput([
                    'type' => 'date'
                ]) ?>
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

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'chief_complaint')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'clinical_history')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'primary_diagnosis')->textarea(['rows' => 6]) ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'other_diagnosis')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'treatment')->textarea(['rows' => 6]) ?>
            </div>
        </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
