<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>
    	<div class="row">
    		<div class="col-md-6">
    			<?= $form->field($model, 'user_id')
			        ->dropDownList($users,  
			            ['prompt' => 'Select Incharge']
			        )
			    ?>

			    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


                <?php if(! $model->isNewRecord) : ?>
                    <?= $form->field($model, 'status')
                        ->dropDownList([
                            0 => 'Active', 
                            1 => 'Not-Active', 
                        ], ['prompt' => 'Select Status']
                    ) ?>
                <?php endif; ?>
    		</div>
    		<div class="col-md-6">
	    		<?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>
    		</div>
    	</div>
	    

	    <div class="form-group">
	        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	    </div>

    <?php ActiveForm::end(); ?>

</div>
 

<div class="modal inmodal fade" id="user-detail" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">INCHARGE DETAILS</h4>
                <small class="font-bold">
                	This includes the details of the selected incharge.Please confirm.
                </small>
                <div class="row spiner-example">
                    <div class="sk-spinner sk-spinner-wave">
                        <div class="sk-rect1"></div>
                        <div class="sk-rect2"></div>
                        <div class="sk-rect3"></div>
                        <div class="sk-rect4"></div>
                        <div class="sk-rect5"></div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                	Confirm
                </button>
            </div>
        </div>
    </div>
</div>