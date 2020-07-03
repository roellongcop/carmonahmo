<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DotsOpdRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dots-opd-record-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-6">
    <?= $form->field($model, 'bp')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">

    <?= $form->field($model, 'wt')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pr')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 't')->textInput(['maxlength' => true]) ?>
    </div>
   

</div>
<div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'S')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'O')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'A')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'P')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-md-6">

        <ul class="todo-list">
        SMOKING HX

<?php
 $smoking_hx = ($model->smoking_hx) ? json_decode($model->smoking_hx,true) : null; 

 ?>
            <li>
            Current: <input type="text" name="DotsOpdRecord[smoking_hx][0]" class="form-control"  
            value="<?= $smoking_hx[0] ?>">
            </li>
            <li>
            Stick/day: <input type="text" name="DotsOpdRecord[smoking_hx][1]" class="form-control"
            value="<?= $smoking_hx[1] ?>" >
            </li>
            <li>
            Former: <input type="text" name="DotsOpdRecord[smoking_hx][2]" class="form-control" 
            value="<?= $smoking_hx[2] ?>">
            </li>
            <li>
            Years Smoking: <input type="text" name="DotsOpdRecord[smoking_hx][3]" class="form-control" 
            value="<?= $smoking_hx[3] ?>">
            </li>
            <li>
            Never: <input type="text" name="DotsOpdRecord[smoking_hx][4]" class="form-control" 
            value="<?= $smoking_hx[4] ?>">
            </li>
            <li>
            PackYear: <input type="text" name="DotsOpdRecord[smoking_hx][5]" class="form-control" 
            value="<?= $smoking_hx[5] ?>">
            </li>
        </ul>
    </div>
</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
