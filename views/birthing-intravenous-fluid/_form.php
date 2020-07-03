<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingIntravenousFluid */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-intravenous-fluid-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'bag_no')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'solution')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'blood')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'time_started')->textInput([
                'type' => 'time'
            ]) ?>

            <?= $form->field($model, 'time_end')->textInput([
                'type' => 'time'
            ]) ?>
        </div>
        <div class="col-md-8">
            <?= $form->field($model, 'remarks')->textarea(['rows' => 5]) ?>
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
