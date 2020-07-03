<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Complaint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complaint-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    	<div class="col-md-7">
    		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    		<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?> 
    		 <?php if(! $model->isNewRecord) : ?>
                <?= $form->field($model, 'status')
                    ->dropDownList([
                        0 => 'Active', 
                        1 => 'Not-Active', 
                    ], ['prompt' => 'Select Status']
                ) ?>
            <?php endif; ?>
    	</div>
    	<div class="col-md-5">
    		<label>Departments Cater this Complaint</label>
			<ul class="todo-list m-t">
				<?php foreach ($departments as $department) : ?>
					<li>
						<input 
							type="checkbox" 
							value="<?= $department->id ?>" 
							name="Complaint[department][]" 
							class="i-checks" <?= Yii::$app->template->isSelected($department, $model) ? 'checked' : '' ?>/>
						<span class="m-l-xs">
							<?= ucwords($department->name) ?>
						</span>
					</li>
				<?php endforeach; ?>
			</ul>
    	</div>
    </div> 

    <hr>
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
