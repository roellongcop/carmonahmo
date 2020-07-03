<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingAssessment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-assessment-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'assessment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'chief_complaint')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'intervention')->textarea(['rows' => 6]) ?>

    <?php if(! $model->isNewRecord) : ?>
        <?= $form->field($model, 'status')
            ->dropDownList([
                0 => 'Active', 
                1 => 'Not-Active', 
            ], ['prompt' => 'Select Status']
        ) ?>
    <?php endif; ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
