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
        <div class="col-md-4">
            <?= $form->field($account, 'username')->textInput([
                'maxlength' => true,
                'value' => Yii::$app->user->identity->username
            ]) ?>

            <?= $form->field($account, 'password')->passwordInput([
                'maxlength' => true,
                'value' => ''
            ]) ?>

            <?= $form->field($account, 'password_confirm')->passwordInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
   </div>

    <?php ActiveForm::end(); ?>

</div>
