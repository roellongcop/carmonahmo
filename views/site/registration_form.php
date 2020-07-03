<?php

use yii\helpers\Html; 
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
$this->title = "Registration Form"
?>

<section class="banner-area relative" style="background: url('<?= Yii::$app->template->getAbout('image_path') ?>') no-repeat center;  background-size: cover;">
    <div class="overlay overlay-bg"></div>  
    <div class="row wrapper border-bottom white-bg page-heading"  style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="col-lg-10">
            <h2 style="color: #fff"> 
                <img 
                src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg"
                width="45"
                height="45"
                > 
                Registration Form
            </h2>
        </div> 
    </div>

    <div class="site-register">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Fill up <small>all needed Information</small></h5> 
                        </div>
                        <div class="ibox-content">
                            <?php $form = ActiveForm::begin(); ?>
                               <div class="row">
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'fname')->textInput([
                                            'maxlength' => true
                                        ]) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'mname')->textInput([
                                            'maxlength' => true
                                        ]) ?>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'lname')->textInput([
                                            'maxlength' => true
                                        ]) ?>
                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'civil_status')
                                            ->dropDownList(  
                                                [1 => 'Single', 2 => 'Married', 3 => 'Widowed'],
                                                ['prompt' => 'Select Civil Status']
                                            )
                                        ?>
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
                                        <?= $form->field($model, 'email')->textInput([
                                            'type' => 'email'
                                        ]) ?>
                                    </div>
                                </div>

                                
                         
                                <div class="row">
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'family_household_number')->textInput() ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'dswd_nhtsmember')->textInput(['
                                            maxlength' => true
                                        ]) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?= $form->field($model, 'educational_attainment')
                                            ->dropDownList([
                                                1 => 'N/A', 
                                                2 => 'Elementary', 
                                                3 => 'High School',
                                                4 => 'College', 
                                            ],
                                            ['prompt' => 'Select Educational Attainment'] )
                                        ?>
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
                                         <?= $form->field($model, 'employment_status')
                                            ->dropDownList([
                                                1 => 'Employed', 
                                                2 => 'Un-Employed',
                                            ],
                                            ['prompt' => 'Select Employement Status'] )
                                        ?>
                                    </div>
                                   
                                    
                                </div> 

                                <div class="form-group">
                                    <?= Html::a('Home', ['/'], ['class' => 'btn btn-default']) ?>
                                    <?= Html::submitButton('Submit', [
                                        'class' => 'btn btn-primary'
                                    ]) ?>
                                </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br>
</section>






                   