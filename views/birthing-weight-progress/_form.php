<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingWeightProgress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="birthing-weight-progress-form">

    <?php $form = ActiveForm::begin(); ?>



    <div class="row">
        <div class="col-md-4">
    		<?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>
    		<?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
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
