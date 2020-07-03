<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DotsTbTreatment */

$this->params['page'] = 'Tb';
$this->params['second'] = 'ipt';
$this->title = $model->dots->PatientName;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->dots->id]];
$this->params['breadcrumbs'][] = ['label' => ' Tb Treatment/IPT card'];
?>


<!-- <style type="text/css">
.d-border{
  d-border:1px solid;
  display: flex;
  
}
.d-border-col{
    d-border-left: 1px solid;
    padding: 10px;
    /*d-border-right: 1px solid;*/
}
</style> -->

<div class="activity-index ibox float-e-margins ibox-content"> 

    <p>
        <?= Html::a('Back', ['view', 'id' => $model->id], ['class' => 'btn btn-white']) ?>
        <?= Html::a('Print', '#', [
            'class' => 'btn btn-success btn-print-dots-tb-treatment'
        ]) ?>
    </p>



	<div id="dots-tb-treatment-form" style="font-size: 7px">

<div class="">
	<div class="container-fluid">
	    <div>

	        <div class="row">
	          <h3><strong>Form 4. TB TREATMENT / IPT CARD </strong></h3>
	        </div>

	        <div class="row d-border">
	            <div class="col-md-3 col-xs-3 d-border-col"> 
	            <div><strong>TB Case Number / IPT No.</strong></div>
	            <span> <?= $model->tb_case_number ?></span>
	            </div>

	            <div class="col-md-3 col-xs-3 d-border-col"> 
	            <div><strong>DATE THE CARD WAS OPENED</strong></div>
	            <span> <?= $model->date_the_card_was_opened ?></span>
	            </div>

	            <div class="col-md-3 col-xs-3 d-border-col"> 
	            <div><strong>Region</strong></div>
	            <span> <?= $model->region ?></span>
	            </div>

	            <div class="col-md-3 col-xs-3 d-border-col"> 
	            <div><strong>NAME OF DOTS FACILITY</strong></div>
	            <span> <?= $model->name_of_dots_facility ?></span>
	            </div>                                
	        </div>

	        <div class="row d-border">
	            <div class="col-md-4 col-xs-4 d-border-col"> 
	            <div><strong>NAME OF PATIENT:</strong></div>
	            <span> <?= $model->dots->PatientName; ?></span>
	            </div>

	            <div class="col-md-5 col-xs-5 d-border-col"> 

	                <div class="row">
	                    <div class="col-xs-4"><strong>DATE OF BIRTH</strong></div>
	                    <div class="col-xs-4"><strong>AGE</strong></div>
	                    <div class="col-xs-4"><strong>SEX</strong></div>
	                </div>

	                <div class="row">
	                    <div class="col-xs-4"><?= $model->dots->patient->birthday ?></div>
	                    <div class="col-xs-4"><?= $model->dots->patient->age ?></div>
	                    <div class="col-xs-4"><?= $model->dots->patient->sex ?></div>
	                </div>
	               
	            </div>

	            <div class="col-md-3 col-xs-3 d-border-col"> 
	            <div><strong>BGC SCAR:</strong></div>
	            <span> <?= Yii::$app->params['bcg_scar'][$model->bcg_scar] ?></span>
	            </div>

	             
	        </div>

	        <div class="row d-border">

	            <div class="col-md-4 col-xs-4 d-border-col" style="padding: unset;font-size: 6.5px;"> 
					<?php
					$diagnostic_test = ($model->diagnostic_test) ? json_decode($model->diagnostic_test,true) : null; 
					?>

	          	  	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-bottom: 1px solid">
			            <div><strong>COMPLETE ADDRESS:</strong></div>
	            		<span> <?= $model->dots->patient->address ?></span>
	            	</div>
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-bottom: 1px solid">
			            <div><strong>SOURCE OF PATIENT:</strong></div>
	            		<span> <?= Yii::$app->params['source_of_patient'][$model->source_of_patient] ?></span>
	            	</div>


					<div><strong>DIAGNOSTIC TEST:</strong></div>

					<div class="row" style="margin-right: unset;margin-left: unset; ">
						<div class="col-md-6 col-xs-6" style="padding: 10px;margin-bottom: 5px;">
						        <strong style="font-size: 6.5px;">1. Tuberculin Skin Testing (TST)</strong> <br>
						         <u style="font-size: 6.5px;">  
						        result:     <?= $diagnostic_test[0] ?><br>
						        Date read:  <?= $diagnostic_test[1] ?>
						        </u>
						</div>
						<div class="col-md-6 col-xs-6" style="padding: 10px;margin-bottom: 5px;">
						       <strong style="font-size: 6.5px;"> 2. CXR Findings</strong> <br>
						        <u style="font-size: 6.5px;">
						       Date of exam:  <?= $diagnostic_test[2] ?> 
						        </u>

						</div>
					</div>

					<div class="row" style="margin-right: unset;margin-left: unset;">
						<div class="col-md-6 col-xs-6" style="padding: 10px;margin-bottom: 5px;">
						    <strong style="font-size: 6.5px;">3. Other Exam:</strong> <br>
						         <u style="font-size: 6.5px;">
						        Date of exam:  <?= $diagnostic_test[3] ?> <br>
						        TBDC:  <?= $diagnostic_test[4] ?> 
						        </u>
						</div>
						<div class="col-md-6 col-xs-6" style="padding: 10px;margin-bottom: 5px;">
						  <strong style="font-size: 6.5px;">4. XPERT MTB/RIF</strong> <br>
						        <u style="font-size: 6.5px;">
						       Result:  <?= $diagnostic_test[5] ?> 
						        </u>
						</div>
					</div>

					   
					<div class="col-md-12 col-xs-12" style="padding: 10px;margin-bottom: 5px;">
					       <strong style="font-size: 6.5px;">5. DSSM Results </strong> <br>

					         <table class=" table-bordered oral-condition" style="width:100% "> 
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
					                            '.$diagnostic_test[$Arrays[$x]][0].'
					                        </td>

					                        <td>
					                           '.$diagnostic_test[$Arrays[$x]][1].'
					                        </td>

					                        <td>
					                           '.$diagnostic_test[$Arrays[$x]][2].'
					                        </td>

					                    </tr>';
					                }
					                ?>
					                </tbody>
					        </table>
					</div>

					<div class="col-md-12" style="padding: 10px;margin-bottom: 5px;">

					</div>		            	
	            </div>

	            <div class="col-md-4 col-xs-4 d-border-col" style="padding: unset"> 

					<div class="col-md-12" style="padding: 10px;margin-bottom: 5px;">
			            <div><strong>OTHER PATIENT DETAILS:</strong></div>
			            

			        <?php
			        $other_patient_details = ($model->other_patient_details) ? json_decode($model->other_patient_details,true) : null; 
			        ?>

			                <div class="row">
			                    <div class="col-md-6 col-xs-6">
			                    Occupation    <span> <u><?= $other_patient_details[0] ?> </u></span><br>
			                    Philhealth No.<span><u><?= $other_patient_details[1] ?></u></span>
			                    </div>  
			        
			                    <div class="col-md-6 col-xs-6">
			                    Contact Person <span><u><?= $other_patient_details[2] ?></u></span><br>
			                    Contact Nos.   <span><u><?= $other_patient_details[3] ?></u></span>
			                    </div>      
			                </div>     
	         		</div>


	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>History Of Anti Tb Drug Intake:</strong></div>
	            		<span> <?= Yii::$app->params['history_of_anti_tb_drug_intake'][$model->history_of_anti_tb_drug_intake] ?></span>
	            	</div>	
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>Bacteriological Status:</strong></div>
	            		<span> <?= Yii::$app->params['bacteriological_status'][$model->bacteriological_status] ?></span>
	            	</div>
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>Classification Of Tb Disease:</strong></div>
	            		<span> <?= Yii::$app->params['classification_of_tb_disease'][$model->classification_of_tb_disease] ?></span>
	            	</div>	
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>Registration Group:</strong></div>
	            		<span> <?= Yii::$app->params['registeration_group'][$model->registeration_group] ?></span>
	            	</div>	
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>Treatment Started:</strong></div>
	            		<span> <?= $model->treatment_started ?></span>
	            	</div>	
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>Treatment Outcome:</strong></div>
	            		<span> <?= Yii::$app->params['treatment_outcome'][$model->treatment_outcome] ?></span>
	            	</div>	
	            </div>

	            <div class="col-md-4 col-xs-4 d-border-col" style="padding: unset">  

	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; ">
		              <div><strong>HOUSE HOLD MEMBERS</strong></div>
			          <table class=" table-bordered" style="width: 100%;font-size: 6.5px;"> 
						<?php
						$house_hold_members = ($model->house_hold_members) ? json_decode($model->house_hold_members,true) : null; 
						
						?>
						<th>First Name</th>
						<th>Age</th>
						<th>Screened</th>

						<?php for ($i=0; $i < 7 ; $i++) { 
						    
						echo '
						<tr>
						    <td>
						         '.$house_hold_members['firstname'][$i].' &nbsp;
						    </td>
						        <td>
						         '.$house_hold_members['age'][$i] .' &nbsp;
						    </td>
						        <td>
						         '.$house_hold_members['sex'][$i] .' &nbsp;
						    </td>
						</tr>';

						 } ?>

						</table>
	            	</div>	
	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>TB DISEASE TREATMENT REGIMEN (encircle)</strong></div>

<?php
$tb_disease_treatment_regimen = ($model->tb_disease_treatment_regimen) ? json_decode($model->tb_disease_treatment_regimen,true) : null; 

?>

    <div class="row">
                <div class="col-md-6 col-xs-6">
                <strong>I. 2HRZE/4HR</strong>
                <div>

                    <?php 
                    $values = ['PTB, New-bacteriologically confirmed','PTB, New-clinically diagnosed','EPTB, New'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {

                    	if(in_array($values[$x], isset($tb_disease_treatment_regimen['2HRZE/4HR'])?$tb_disease_treatment_regimen['2HRZE/4HR']:[])){
                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
                    	}
                    	else{
                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
                    	}

                    }

                    ?>
                               
                </div>
            </div> 
                <div class="col-md-6 col-xs-6">
                <strong>II. 2HRZES/1HRZE/5HRE</strong>
                <div>

                    <?php 
                    $values = ['Relapse','Treatment After Failure','TALF, PTOU','OTHER'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                    	if(in_array($values[$x], isset($tb_disease_treatment_regimen['2HRZES/1HRZE/5HRE'])?$tb_disease_treatment_regimen['2HRZES/1HRZE/5HRE']:[])){
                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
                    	}
                    	else{
                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
                    	}

                    }

                    ?>
                               
                </div>
            </div> 

    </div>


     <div class="row">
                <div class="col-md-6 col-xs-6">
                 <strong>Ia. 2HRZE/10HR</strong>
                <div>

                    <?php 
                    $values = ['EPTB, New-CNS/bones or joint'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                    	if(in_array($values[$x], isset($tb_disease_treatment_regimen['2HRZE/10HR'])?$tb_disease_treatment_regimen['2HRZE/10HR']:[] )){
                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
                    	}
                    	else{
                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
                    	}
                    }

                    ?>
                               
                </div>
            </div> 
              <div class="col-md-6 col-xs-6">
                <strong> IIa. 2HRZES/1HRZE/9HRE</strong>
                <div>

                    <?php 
                    $values = ['EPTB, retx-CNS/bones or joint'];
                    for($x = 0 ; $x < sizeof($values) ; $x++) {
                    	if(in_array($values[$x], isset($tb_disease_treatment_regimen['2HRZES/1HRZE/9HRE'])?$tb_disease_treatment_regimen['2HRZES/1HRZE/9HRE']:[])){
                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
                    	}
                    	else{
                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
                    	}
                    }

                    ?>
                               
                </div>
            </div> 

    </div>




	            	</div>	

	            	<div class="col-md-12" style="padding: 10px;margin-bottom: 5px; border-top: 1px solid">
			            <div><strong>Diagnosis:</strong></div>
	            		<span> <?= Yii::$app->params['diagnosis'][$model->diagnosis] ?></span>
	            	</div>	

	            </div>    
	           
	        </div>   


	         <div class="row d-border" style="padding: 10px 0 10px 0">
				<div class="col-md-12 col-xs-12" >
							<div><strong>CLINICAL EXAMINATION BEFORE AND DURING TREATMENT</strong></div>
					         <table class=" table-bordered" style="width:100%"> 
					            <?php $DotsTbTreatment = ($model->clinical_examination_before_and_during_treatment) ? json_decode($model->clinical_examination_before_and_during_treatment,true) : null; ?>

					                <tbody>

					                <?php
					                $Arrays = ['Date Examined/Results','Weight in Kg.','Unexplained fever > 2 wks','Unexplained cough/wheezing > 2wks','Unimproved general well being','Poor Appetite','Positive PE findings for Extra-pulmonary TB','Side Effects'];
					                for($x = 0 ; $x < sizeof($Arrays) ; $x++){
					                echo '
					                    <tr>
					                        <td style="width:8.3%">'.$Arrays[$x].'</td>
					                ';
					                
					                    for($y = 0 ; $y <11 ; $y++){

					                        if($x == 0){
					                        echo '
					                        <td style="width:8.3%">
					                            '. $DotsTbTreatment[$Arrays[$x]][$y]  . '
					                        </td>';
					                        } 
					                        else{
					                         echo '
					                        <td style="width:8.3%">
					                            '. $DotsTbTreatment[$Arrays[$x]][$y]  . '
					                        </td>';                           
					                        }  
					                        
					                    }
					  
					                echo '</tr>';
					                }
					                ?>
					                </tbody>
					        </table>
				</div>
			</div>

			<div class="row d-border" style="padding: 10px 0 10px 0">
				<div class="col-md-12 col-xs-12">
							<div><strong>DRUGS: DOSAGE AND PREPARATIONS (for Children)</strong></div>
							
							         <table class=" table-bordered oral-condition" style="width:100%"> 
							 <?php $dosage_and_preperation = ($model->dosage_and_preperation) ? json_decode($model->dosage_and_preperation,true) : null; 

							 ?>
							                <tbody>

							                <?php
							                $Arrays = ['Isoniazid (H) 10mg/kg (200mg/5ml)','Rifampicin (R) 15mg/kg (200mg/5ml)','Pyraninamide (Z) 30mg/kg (200mg/5ml)','Ethambutol (E) 20mg/kg (400mg tab)','Streptomycin (S) 15mg/kg (1g/vial)'];
							                for($x = 0 ; $x < sizeof($Arrays) ; $x++){
							                echo '
							                    <tr>
							                        <td style="width:7.6%">'.$Arrays[$x].'</td>
							                ';

							                    for($y = 0 ; $y <12 ; $y++){

							                         echo '
							                        <td style="width:7.6%">
							                            '.$dosage_and_preperation[$Arrays[$x]][$y].'
							                        </td>';                           
							                        
							                    }
							               
							                echo '</tr>';
							                }
							                ?>
							                </tbody>
							        </table>
				</div>				
	         </div>


	    </div>    
	</div>
</div>
	

	</div>
</div>



