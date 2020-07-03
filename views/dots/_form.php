<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dots */
/* @var $form yii\widgets\ActiveForm */

function valueHelper($value, $category) {
    if($category && !is_array($category))
    $category = json_decode($category, true);

    if ($category && is_array($category)) {
        if (in_array($value, $category)) {
           return 'checked';
        } 
    }
  
}



?>

<div class="department-create ibox float-e-margins ibox-content">


    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-4"> 
                <?= $form->field($model, 'patient_id')
                    ->dropDownList($users,  
                    ['prompt' => 'Select Incharge']
                ) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'age')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'sex')
                 ->dropDownList([
                    1=>"Male",
                    2=>"Female"
                    ],  
                    ['prompt' => 'Select Sex']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'name_of_collection_unit')->textInput([
                    'maxlength' => true
                ]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'telephone_number')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

    <div class="row">
           <div class="col-md-4">
            <p class="lead col-md-12">History of Treatment</p>
            <ul class="todo-list">

                <?php 
                $history_of_treatment = ($model->history_of_treatment)?json_decode($model->history_of_treatment,true):null;
                $values = ['News','Transfer-in','Re-treatment','Relapse','TALF','Treatment After Failure','PTOU'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->history_of_treatment)  .' name="Dots[history_of_treatment][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

               

                ?>
                <li>
                    <input type="text" name="Dots[history_of_treatment][others]" class="form-control" placeholder="Other" value="<?= isset($history_of_treatment['others'])?$history_of_treatment['others']:null;  ?>" >
                </li>               
            </ul>
        </div>

        <div class="col-md-4">
            <p class="lead col-md-12">Disease Classification</p>
            <ul class="todo-list">

                <?php 
                $values = ['Pulmonary','Extra-pulmonary'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->disease_classification)  .' name="Dots[disease_classification][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>             
            </ul>
        </div>
        <div class="col-md-4">
            <p class="lead col-md-12">Reason For Examination</p>
            <ul class="todo-list">

                <?php 
                $values = ['Diagnosis','Follow-up'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->reason_for_examination)  .' name="Dots[reason_for_examination][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>             
            </ul>
        </div>


        <div class="col-md-4">
            <p class="lead col-md-12">Type of Specimen</p>
            <ul class="todo-list">

                <?php 
                $type_of_specimen = ($model->type_of_specimen)?json_decode($model->type_of_specimen,true):null;

                $values = ['Sputum'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->type_of_specimen)  .' name="Dots[type_of_specimen][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>    
                  <li>
                    <input type="text" name="Dots[type_of_specimen][others]" class="form-control" placeholder="Other" value="<?= isset($type_of_specimen['others'])?$type_of_specimen['others']:null;  ?>">
                </li>             
            </ul>
        </div>
        <div class="col-md-4">
            <p class="lead col-md-12">Test Requested</p>
            <ul class="todo-list">

                <?php 
                $values = ['DSSM','Xpert MTB/RIF','Culture','DST','LPA'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->test_requested)  .' name="Dots[test_requested][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>    
                         
            </ul>
        </div>

    </div>
 

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    
    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
    
    $(document).ready(function() {
        $('#dots-patient_id').on('change', function() {
            var patient_id = $(this).val(); 
            $.ajax({
                url: base_url + 'user/show/',
                data: {id : patient_id},
                method: 'get',
                dataType: 'json',
                success: (response => {
                    $('#dots-age').val(response.age);
                    $('#dots-sex').val(response.sex);
                })
            });
        });
    });

JS;

$this->registerJs($script);