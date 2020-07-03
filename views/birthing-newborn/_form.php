<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingNewborn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-newborn-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <p class="lead col-md-12">Baby's Information</p>
        <div class="col-md-4">
            <?= $form->field($model, 'baby_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'gender')
                ->dropDownList(  
                    [1 => 'Male', 2 => 'Female'],
                    ['prompt' => 'Select Gender']
                )
            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'delivery_type')
                ->dropDownList(  
                    [1 => 'Normal', 2 => 'Cesarian'],
                    ['prompt' => 'Select Delivery type']
                )
            ?>
        </div>
    </div>

    <hr>

    <div class="row">
        <p class="lead col-md-12">Delivery Information</p>
        <div class="col-md-4">
            <?= $form->field($model, 'date_delivered')->textInput([
                'type' => 'date'
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'time_delivered')->textInput([
                'type' => 'time'
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
        </div>
    </div>




    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'apgar_score')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'head_circumference')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'abdominal_circumference')->textInput(['maxlength' => true]) ?>
        </div>
    </div>



    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'chest_circumference')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'body_length')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
        </div>
    </div>

    <hr>

    <div class="row">
        <p class="lead col-md-12">Medications</p>
        <div class="col-md-4">
            <?= $form->field($model, 'procedures')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'medications')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>
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
