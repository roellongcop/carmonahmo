<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Role */
/* @var $form yii\widgets\ActiveForm */
$controller_actions = Yii::$app->template->controllerActions();

$src = <<<JS
    $('#check_all').on('change', function() {
        var is_checked = $(this).is(':checked');
        if(is_checked) {
            $('input[type="checkbox"]').prop('checked', true);
        }
        else {
            $('input[type="checkbox"]').prop('checked', false);
        }

    });
JS;
$this->registerJs($src);
?>

<div class="role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <table class="table">
        <tbody>
            <tr>
                <td colspan="2">
                    <label>
                        <input type="checkbox" name="" id="check_all">
                        Check All
                    </label>
                </td>
            </tr>
            <?php foreach ($controller_actions as $controller => $actions) : ?>
                <tr>
                    <td><?= $controller ?></td>
                    <td>
                        <?php foreach ($actions as $action) : ?>
                            <label>
                                <input type="checkbox" name="Role[access][<?= $controller ?>][]" value="<?= $action ?>" <?= isset($model->access[$controller]) && in_array($action, $model->access[$controller]) ? 'checked': '' ?>>
                                <?= $action ?>
                            </label>
                        <?php endforeach; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
