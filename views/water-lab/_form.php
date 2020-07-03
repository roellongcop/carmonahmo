<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WaterLab */
/* @var $form yii\widgets\ActiveForm */

function valueHelper($value, $category) {

    if(!is_array($category))
    $category = json_decode($category, true);

    if ($category) {
        if (in_array($value, $category)) {
           return 'checked';
        } 
    }
  
}


?>

<div class="water-lab-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'patient_id')
                ->dropDownList($users,  
                    ['prompt' => 'Select Incharge']
                )
            ?>
            <?= $form->field($model, 'sampling_collected_by')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'specify_address_sampling_point')->textarea(['rows' => 5]) ?>
        </div>
    </div>


    <hr>

    <div class="row">
        
        <div class="col-md-6">
            <p class="lead col-md-12">SAMPLING POINT</p>
            <ul class="todo-list">

                <?php 
                $values = ['Pumps','Tank','House Faucet','Fire Hydrant','Flowing','River'];
                for($x = 0 ; $x < sizeof($values) ; $x++) {
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->sampling_point)  .' name="WaterLab[sampling_point][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                           
            </ul>
        </div> 

        <div class="col-md-6">
            <p class="lead col-md-12">SOUCE OF WATER SUPPLY</p>
            <ul class="todo-list">

                <?php 
                $values = ['Deep Well','Shallow','River','Lake','Spring Developed','Spring Undeveloped'];
                for($x = 0 ; $x < sizeof($values) ; $x++) {
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->source_of_water_supply)  .' name="WaterLab[source_of_water_supply][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                          
            </ul>
        </div> 
    </div>


    <hr>

    <div class="row">
        
        <div class="col-md-4">
            <p class="lead col-md-12">TYPE OF OWNERSHIP</p>
            <ul class="todo-list">

                <?php 
                $values = ['Private','Public','Local Waterworks'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->type_of_ownership)  .' name="WaterLab[type_of_ownership][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                           
            </ul>
        </div> 

        <div class="col-md-4">
            <p class="lead col-md-12">TYPE OF WELL</p>
            <ul class="todo-list">

                <?php 
                $values = ['DUG','BORED','DRILLED','SANITARY'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->type_of_well)  .' name="WaterLab[type_of_well][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                          
            </ul>
        </div> 


        <div class="col-md-4">
            <p class="lead col-md-12">WELL USAGE</p>
            <ul class="todo-list">

                <?php 
                $values = ['New (Not yet in use) ','Recent (in use less than 3 months) ','Old (in use for over 3 months)'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->well_usage)  .' name="WaterLab[well_usage][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                          
            </ul>
        </div> 

    </div>

    <hr>

    <div class="row"> 

        <div class="col-md-4">
            <p class="lead col-md-12">REPAIR DONE WITHIN 2 MONTHS</p>
            <ul class="todo-list">

                <?php 
                $values = ['None','Pump','Rod','Cleaned Well'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->repair_done_within_2_months)  .' name="WaterLab[repair_done_within_2_months][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                          
            </ul>
        </div> 

        <div class="col-md-4">
            <p class="lead col-md-12">PUMP REQUIRED PRINTING</p>
            <ul class="todo-list">

                <?php 
                $values = ['Yes','No'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->pump_required_priming)  .' name="WaterLab[pump_required_priming][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                           
            </ul>
        </div>


        <div class="col-md-4">
            <p class="lead col-md-12">WATER TREATED</p>
            <ul class="todo-list">

                <?php 
                 $values = ['Yes','No'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->water_treated)  .' name="WaterLab[water_treated][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                          
            </ul>
        </div> 

    </div>   

    <hr>
    <div class="row">
        
        <div class="col-md-8">
            <p class="lead col-md-12">DISTANCE FROM WELL OF THE FOLLOWING IN METER</p>
            <ul class="todo-list">

                <?php 
                $values = ['Privy','Septic Tank','Cesspool','Stagnant Water','Sea and others','Piggery, Poultry or animal house','Hospital Effluent','Cemetery','Canal','Garbage/Dumpsite'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->distance_from_well_of_the_following_in_meter)  .' name="WaterLab[distance_from_well_of_the_following_in_meter][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                           
            </ul>
        </div> 
         <div class="col-md-4">
            <p class="lead col-md-12">ANALYSIS REQUESTED</p>
            <ul class="todo-list">

                <?php 
                $values = ['BACTERIOLOGICAL','BIOLOGICAL','PHYSICAL / CHEMICAL'];
                for($x = 0 ; $x < sizeof($values) ; $x++){
                    echo '
                    <li>
                        <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x], $model->analysis_requested)  .' name="WaterLab[analysis_requested][]" class="i-checks"/>
                        <span class="m-l-xs">'.$values[$x].'</span>
                    </li>
                    ';
                }

                ?>
                           
            </ul>
        </div> 
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'designation')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'location_of_well')->textarea(['rows' => 6]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'received_by')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'labaratory_no')->textInput() ?>
            <?= $form->field($model, 'date_time')->input('date') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'parameters_to_be_examined')->textarea(['rows' => 8]) ?>
        </div>
    </div>

   <div class="row">
        <div class="col-md-6">
          <?= $form->field($model, 'result')
                    ->dropDownList(Yii::$app->params['result'],  
                        ['prompt' => 'Select Result']
                    )
                ?>
        </div>

    </div>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
