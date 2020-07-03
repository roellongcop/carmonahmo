<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'day')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

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
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
