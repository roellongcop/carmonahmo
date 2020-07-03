<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DotsTbTreatment */
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



<div class="dots-tb-treatment-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'tb_case_number')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'date_the_card_was_opened')->input('date') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'region')->textInput() ?>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'name_of_dots_facility')->textInput() ?>
        </div>
        <div class="col-md-4">
           <?= $form->field($model, 'source_of_patient')->DropDownList([
                1 => 'Public Health Center',
                2 => 'Other Public Facilities',
                3 => 'Private',
                4 => 'Community'
            ], ['prompt' => 'select source of patient']) ?>
        </div>


        <div class="col-md-4">
            <?= $form->field($model, 'bcg_scar')->DropDownList([
                1 => 'Yes',
                2 => 'No',
                3 => 'Doubtful'
            ], ['prompt' => 'select BCG scar']) ?> 
        </div> 
    </div>

<div class="row" style="padding-left: 15px;">
<strong>HOUSEHOLD MEMBERS:</strong>
<table class=" table-bordered oral-condition" style="width:50%;"> 
<?php
$house_hold_members = ($model->house_hold_members) ? json_decode($model->house_hold_members,true) : null; 

?>
<th>First Name</th>
<th>Age</th>
<th>Screened</th>

<?php for ($i=0; $i < 7 ; $i++) { ?>
    

<tr>
    <td>
         <input type="text" name="DotsTbTreatment[house_hold_members][firstname][]" class="form-control" placeholder="" value="<?= $house_hold_members['firstname'][$i] ?>">
    </td>
        <td>
         <input type="text" name="DotsTbTreatment[house_hold_members][age][]" class="form-control" placeholder="" value="<?= $house_hold_members['age'][$i] ?>">
    </td>
        <td>
         <input type="text" name="DotsTbTreatment[house_hold_members][sex][]" class="form-control" placeholder="" value="<?=$house_hold_members['sex'][$i] ?>">
    </td>
</tr>

<?php } ?>

</table>

</div>

<?php
$tb_disease_treatment_regimen = ($model->tb_disease_treatment_regimen) ? json_decode($model->tb_disease_treatment_regimen,true) : null; 

//var_dump($tb_disease_treatment_regimen['2HRZE/4HR']); exit();
?>

<div style="padding-top: 20px;padding-bottom: 20px">
<strong>TB DISEASE TREATMENT REGIMEN (encircle)</strong>
    <div class="row">
                <div class="col-md-6">
                <p class="lead col-md-12">I. 2HRZE/4HR</p>
                <ul class="todo-list">

                    <?php 
                    $values = ['PTB, New-bacteriologically confirmed','PTB, New-clinically diagnosed','EPTB, New'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                        echo '
                        <li>
                            <input type="checkbox" value="'.$values[$x].'" '. 
                            valueHelper($values[$x],isset($tb_disease_treatment_regimen['2HRZE/4HR'])?$tb_disease_treatment_regimen['2HRZE/4HR']:null)  .' name="DotsTbTreatment[tb_disease_treatment_regimen][2HRZE/4HR][]" class="i-checks"/>
                            <span class="m-l-xs">'.$values[$x].'</span>
                        </li>
                        ';
                    }

                    ?>
                               
                </ul>
            </div> 
                        <div class="col-md-6">
                <p class="lead col-md-12">II. 2HRZES/1HRZE/5HRE</p>
                <ul class="todo-list">

                    <?php 
                    $values = ['Relapse','Treatment After Failure','TALF, PTOU','OTHER'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                        echo '
                        <li>
                            <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x],isset($tb_disease_treatment_regimen['2HRZES/1HRZE/5HRE'])?$tb_disease_treatment_regimen['2HRZES/1HRZE/5HRE']:null)   .' name="DotsTbTreatment[tb_disease_treatment_regimen][2HRZES/1HRZE/5HRE][]" class="i-checks"/>
                            <span class="m-l-xs">'.$values[$x].'</span>
                        </li>
                        ';
                    }

                    ?>
                               
                </ul>
            </div> 

    </div>


     <div class="row">
                <div class="col-md-6">
                <p class="lead col-md-12">Ia. 2HRZE/10HR</p>
                <ul class="todo-list">

                    <?php 
                    $values = ['EPTB, New-CNS/bones or joint'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                        echo '
                        <li>
                            <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x],isset($tb_disease_treatment_regimen['2HRZE/10HR'])?$tb_disease_treatment_regimen['2HRZE/10HR']:null)   .' name="DotsTbTreatment[tb_disease_treatment_regimen][2HRZE/10HR][]" class="i-checks"/>
                            <span class="m-l-xs">'.$values[$x].'</span>
                        </li>
                        ';
                    }

                    ?>
                               
                </ul>
            </div> 
              <div class="col-md-6">
                <p class="lead col-md-12">IIa. 2HRZES/1HRZE/9HRE</p>
                <ul class="todo-list">

                    <?php 
                    $values = ['EPTB, retx-CNS/bones or joint'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                        echo '
                        <li>
                            <input type="checkbox" value="'.$values[$x].'" '. valueHelper($values[$x],isset($tb_disease_treatment_regimen['2HRZES/1HRZE/9HRE'])?$tb_disease_treatment_regimen['2HRZES/1HRZE/9HRE']:null)   .' name="DotsTbTreatment[tb_disease_treatment_regimen][2HRZES/1HRZE/9HRE][]" class="i-checks"/>
                            <span class="m-l-xs">'.$values[$x].'</span>
                        </li>
                        ';
                    }

                    ?>
                               
                </ul>
            </div> 

    </div>
</div>


    <ul class="todo-list">
    OTHER PATIENT DETAILS

<?php
$other_patient_details = ($model->other_patient_details) ? json_decode($model->other_patient_details,true) : null; 
?>

        <li>Occupation
            <input type="text" name="DotsTbTreatment[other_patient_details][]" class="form-control" placeholder="Occupation" value="<?= $other_patient_details[0] ?>">
        </li>  
        <li>Philhealth No.
            <input type="text" name="DotsTbTreatment[other_patient_details][]" class="form-control" placeholder="Philhealth No." value="<?= $other_patient_details[1] ?>">
        </li>      
        <li>Contact Person
            <input type="text" name="DotsTbTreatment[other_patient_details][]" class="form-control" placeholder="Contact Person" value="<?= $other_patient_details[2] ?>">
        </li>      
        <li>Contact Nos.
            <input type="text" name="DotsTbTreatment[other_patient_details][]" class="form-control" placeholder="Contact Nos." value="<?= $other_patient_details[3] ?>">
        </li>                   
    </ul>


    <ul class="todo-list">
    DIAGNOSTIC TEST

<?php
$diagnostic_test = ($model->diagnostic_test) ? json_decode($model->diagnostic_test,true) : null; 
?>

        <li>
        1. Tuberculin Skin Testing (TST) <br>
        result:      <input type="text" name="DotsTbTreatment[diagnostic_test][]" class="form-control" value="<?= $diagnostic_test[0] ?>" >
        Date read:   <input type="date" name="DotsTbTreatment[diagnostic_test][]" class="form-control" value="<?= $diagnostic_test[1] ?>" >
        </li>  
        <li>
        2. CXR Findings <br>
        Date of exam: <input type="date" name="DotsTbTreatment[diagnostic_test][]" class="form-control" value="<?= $diagnostic_test[2] ?>"  >
        </li>      
        <li>
        3. Other Exam: <br>
        Date of exam: <input type="date" name="DotsTbTreatment[diagnostic_test][]" class="form-control" value="<?= $diagnostic_test[3] ?>" >
        TBDC: <input type="text" name="DotsTbTreatment[diagnostic_test][]" class="form-control" value="<?= $diagnostic_test[4] ?>" >
        </li>      
        <li>
        4. XPERT MTB/RIF <br>
            <input type="text" name="DotsTbTreatment[diagnostic_test][]" class="form-control" value="<?= $diagnostic_test[5] ?>" >
        </li>  
         <li>
        5. DSSM Results <br>

         <table class=" table-bordered oral-condition" style="width:100%"> 
         <th>Months</th>
         <th>Due Date</th>
         <th>Date Examined</th>
         <th>Result</th>

                <tbody>

                <?php

       
          //  $diagnostic_test = ($model->diagnostic_test) ? json_decode($model->diagnostic_test,true) : null; 


                $Arrays = ['months 0','months 1','months 2','months 3','months 4','months 5','months 6','> months 7'];
                for($x = 0 ; $x < sizeof($Arrays) ; $x++){
                echo '
                    <tr>
                        <td style="padding-left: 5px;">'.$Arrays[$x].'</td>

                        <td>
                            <input  style="width:100%"
                            type="date"  
                            name="DotsTbTreatment[diagnostic_test]['.$Arrays[$x].'][]" 
                            value="'.$diagnostic_test[$Arrays[$x]][0].'">
                        </td>

                        <td>
                            <input style="width:100%"
                            type="date" 
                            name="DotsTbTreatment[diagnostic_test]['.$Arrays[$x].'][]" 
                             value="'.$diagnostic_test[$Arrays[$x]][1].'">
                        </td>

                        <td>
                            <input style="width:100%"
                            type="text" 
                            name="DotsTbTreatment[diagnostic_test]['.$Arrays[$x].'][]" 
                             value="'.$diagnostic_test[$Arrays[$x]][2].'">
                        </td>

                    </tr>';
                }
                ?>
                </tbody>
        </table>
        </li>                  
    </ul>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'diagnosis')->DropDownList([
                1 => 'TB DISEASES',
                2 => 'TB INFECTION, FOR IPT(FOR CHILDREN BELOW 5YO)',
                3 => 'TB EXPOSURE, FOR IPT(FOR CHILDREN BELOW 5YO)'
            ], ['prompt' => 'select diagnosis']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'history_of_anti_tb_drug_intake')->DropDownList([
                1 => 'Yes',
                2 => 'No'
            ], ['prompt' => 'select']) ?> 
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'bacteriological_status')->DropDownList([
                1 => 'bacteriology Confirmed',
                2 => 'Clinically Diagnosed'
            ], ['prompt' => 'select']) ?> 
        </div>
    </div>

     
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'classification_of_tb_disease')->DropDownList([
                1 => 'Pulmonary',
                2 => 'Extra-pulmonary'
            ], ['prompt' => 'select']) ?> 
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'registeration_group')->DropDownList([
                1 => 'New',
                2 => 'Relapse',
                3 => 'TALF',
                4 => 'Treatment After Failure',
                5 => 'PTOU',
                6 => 'other',
                7 => 'Transfer-in'
            ], ['prompt' => 'select']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'treatment_started')->input('date')?> 
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'treatment_outcome')->DropDownList([
                1 => 'CURED',
                2 => 'TREATMENT COMPLETED',
                3 => 'TREATMENT FAILED',
                4 => 'LOST TO FOLLOW-UP',
                5 => 'NOT EVALUATED',
                6 => 'DIED'
               ], ['prompt' => 'select']) ?> 
    
        </div>
    </div>
     



    <hr>

<ul class="todo-list">
<li style="overflow: auto;">
CLINICAL EXAMINATION BEFORE AND DURING TREATMENT
         <table class=" table-bordered oral-condition" style="width:100%"> 
            <?php $DotsTbTreatment = ($model->clinical_examination_before_and_during_treatment) ? json_decode($model->clinical_examination_before_and_during_treatment,true) : null; ?>

                <tbody>

                <?php
                $Arrays = ['Date Examined/Results','Weight in Kg.','Unexplained fever > 2 wks','Unexplained cough/wheezing > 2wks','Unimproved general well being','Poor Appetite','Positive PE findings for Extra-pulmonary TB','Side Effects'];
                for($x = 0 ; $x < sizeof($Arrays) ; $x++){
                echo '
                    <tr>
                        <td style="padding-left: 5px;">'.$Arrays[$x].'</td>
                ';
                
                    for($y = 0 ; $y <11 ; $y++){

                        if($x == 0){
                        echo '
                        <td>
                            <input 
                            type="date" 
                            name="DotsTbTreatment[clinical_examination_before_and_during_treatment]['.$Arrays[$x].'][]" 
                            value="'. $DotsTbTreatment[$Arrays[$x]][$y]  . '">
                        </td>';
                        } 
                        else{
                         echo '
                        <td>
                            <input 
                            type="text" 
                            name="DotsTbTreatment[clinical_examination_before_and_during_treatment]['.$Arrays[$x].'][]" 
                            value="'. $DotsTbTreatment[$Arrays[$x]][$y]  . '">
                        </td>';                           
                        }  
                        
                    }
  
                echo '</tr>';
                }
                ?>
                </tbody>
        </table>
</li>
    
<li style="overflow: auto">
DOSAGE AND PREPARATIONS (for Children)
         <table class=" table-bordered oral-condition" style="width:100%"> 
 <?php $dosage_and_preperation = ($model->dosage_and_preperation) ? json_decode($model->dosage_and_preperation,true) : null; 

 ?>
                <tbody>

                <?php
                $Arrays = ['Isoniazid (H) 10mg/kg (200mg/5ml)','Rifampicin (R) 15mg/kg (200mg/5ml)','Pyraninamide (Z) 30mg/kg (200mg/5ml)','Ethambutol (E) 20mg/kg (400mg tab)','Streptomycin (S) 15mg/kg (1g/vial)'];
                for($x = 0 ; $x < sizeof($Arrays) ; $x++){
                echo '
                    <tr>
                        <td style="padding-left: 5px;">'.$Arrays[$x].'</td>
                ';

                    for($y = 0 ; $y <12 ; $y++){

                         echo '
                        <td>
                            <input 
                            type="text" 
                            name="DotsTbTreatment[dosage_and_preperation]['.$Arrays[$x].'][]" 
                            value="'.$dosage_and_preperation[$Arrays[$x]][$y].'">
                        </td>';                           
                        
                    }
               
                echo '</tr>';
                }
                ?>
                </tbody>
        </table>
    </li>
</ul>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
