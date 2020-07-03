<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
       <div class="row">
            <p class="lead col-md-12">Personal Information</p>
            
                
            <div class="col-md-3">
                <?= $form->field($model, 'fname')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'mname')->textInput() ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'lname')->textInput() ?>
            </div>
               
            
            <div class="col-md-2"> 
                <?= $form->field($model, 'gender')
                    ->dropDownList(  
                        [1 => 'Male', 2 => 'Female'],
                        ['prompt' => 'Select Gender']
                    )
                ?> 
            </div> 
            <div class="col-md-2">
                <?= $form->field($model, 'civil_status')
                    ->dropDownList(  
                        [1 => 'Single', 2 => 'Married', 3 => 'Widowed'],
                        ['prompt' => 'Select Civil Status']
                    )
                ?> 
            </div> 
        </div>

        <div class="row">
            <div class="col-md-8">
                <?= $form->field($model, 'address')->textInput() ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'birthday')->textInput([
                    'type' => 'date'
                ]) ?>
            </div>
            <div class="col-md-1">
                <?= $form->field($model, 'age')->textInput([
                    'readonly' => true
                ]) ?>
            </div>
        </div>
 
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'family_household_number')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'dswd_nhtsmember')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'educational_attainment')
                    ->dropDownList(  
                        Yii::$app->params['educational_attainment'],
                        ['prompt' => 'Select Educational Attainment']
                    )
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                 <?= $form->field($model, 'employment_status')
                    ->dropDownList(  
                        Yii::$app->params['employment_status'],
                        ['prompt' => 'Select Employement Status']
                    )
                ?>
            </div>
        </div>

        <hr>

        <div class="row">
            <p class="lead col-md-12">Account Information</p>
            <div class="col-md-4">
                <?= $form->field($model, 'username')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'password')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'user_type')
                    ->dropDownList(  
                        \app\models\RoleSearch::dropdown(),
                        ['prompt' => 'Select User Type']
                    )
                ?>
            </div>
        </div>

        <hr>

        <div class="row">
            
        </div>
 

        <div class="form-group">
            <?= Html::a('Home', ['/'], ['class' => 'btn btn-default']) ?>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
