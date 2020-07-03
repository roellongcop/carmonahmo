<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-4">
    <?= $form->field($modelUpload, 'imageFile')->fileInput()->label('Upload Profile Picture') ?>    
        </div>
        <div class="col-md-4">
            <img alt="image" 
            class="img-circle" 
            src="<?= (!empty(Yii::$app->user->identity->image_path))?Yii::$app->user->identity->image_path:Yii::$app->urlManager->baseUrl . '/resources/backend/img/profile_small.JPG' ?>" width="50" height="50">          
        </div>
    </div>

       	<div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'fname')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'mname')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'lname')->textInput() ?>
            </div>
               
        </div>
       <div class="row">
	       	<div class="col-md-4"> 
                <?= $form->field($model, 'gender')
                    ->dropDownList(  
                        [1 => 'Male', 2 => 'Female'],
                        ['prompt' => 'Select Gender']
                    )
                ?> 
            </div> 
            <div class="col-md-4">
                <?= $form->field($model, 'civil_status')
                    ->dropDownList(  
                        [1 => 'Single', 2 => 'Married', 3 => 'Widowed'],
                        ['prompt' => 'Select Civil Status']
                    )
                ?> 
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
                <?= $form->field($model, 'blk')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'lot')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'brgy')->textInput() ?>
            </div>
               
        </div>


        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'city')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'province')->textInput() ?>
            </div> 
            <div class="col-md-4">
                 <?= $form->field($model, 'employment_status')
                    ->dropDownList(  
                        [
                            1 => 'Employed',  
                            2 => 'Un-Employed',
                        ],
                        ['prompt' => 'Select Employement Status']
                    )
                ?>
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
                        [
                            1 => 'N/A', 
                            2 => 'Elementary', 
                            3 => 'High School',
                            4 => 'College', 
                        ],
                        ['prompt' => 'Select Educational Attainment']
                    )
                ?>
            </div>
        </div>
 
        <div class="row">
            <div class="col-md-8">
                <?= $form->field($model, 'authkey', ['template' => '
                    <div class="row">
                        <div class="col-md-12">
                            <label>Verification Code</label>
                            <div class="input-group col-md-12">
                                {input}
                                <span class="input-group-btn"> 
                                    <a title="Generate Verification Code" class="btn btn-primary create-serial">
                                        <i class="fa fa-refresh"></i> 
                                    </a> 
                                </span>
                            </div>
                            {hint} {error}
                        </div>
                    </div>
                '])->textInput() ?>

            </div>
            
        </div>
 


 

        <div class="form-group">
            <?= Html::a('Home', ['/'], ['class' => 'btn btn-default']) ?>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>


</div>
