<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DotsTbTreatment */

$this->params['page'] = 'Tb';
$this->params['second'] = 'TbProgram';

$this->title = ucwords($model->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Dots', 'url' => ['/dots']];
$this->params['breadcrumbs'][] = $this->title;
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
        <?php # Html::a('Back', ['view', 'id' => $model->id], ['class' => 'btn btn-white']) ?>
        <?= Html::a('Print', '#', [
            'class' => 'btn btn-success btn-print-dots'
        ]) ?>
    </p>



	<div id="dots-form" style="font-size: 15px">

		<div class="">
			<div class="container-fluid">
		    	<div class="row">
		    		<h3 style="text-align: center;"> Form 2a. NTP Laboratory Request Form</h3>
		    		<u><strong>To be filled out by Health Worker</strong></u>
		    	</div>
		    	<div class="row">
		    		<div class="d-padding col-md-6 col-xs-6">
		    			<strong>Name of Collection Unit:</strong> <?= $model->name_of_collection_unit ?>
		    		</div>
		    		<div class="d-padding col-md-6 col-xs-6">
		    			<strong>Date of Request:</strong> <?= $model->date_of_request ?>
		    		</div>
		    	</div>

		    	<div class="row">
		    		<div class="d-padding col-md-6 col-xs-6">
		    			<strong>Name of Patient:</strong> <?= $model->patientName ?>
		    		</div>
		    		<div class="d-padding col-md-3 col-xs-3">
		    			<strong>Age:</strong>  <?= $model->age ?>
		    		</div>
		    		<div class="d-padding col-md-3 col-xs-3">
		    			<?php $gender = [1 => 'Male', 2 => 'Female']; ?>
		    			<strong>Sex:</strong>  <?= $model->sex ?>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="d-padding col-md-6 col-xs-6">
		    			<strong>Address:</strong>  <?= $model->patient->address ?>
		    		</div>
		    		<div class="d-padding col-md-6 col-xs-6">
		    			<strong>Telephone/cellphone number:</strong>  <?= $model->telephone_number ?>
		    		</div>
		    	</div>
		    	<div class="row" style="padding-top:20px;">
			    	<div class="col-md-3 col-xs-3">
			    	<strong>History of Treatment:</strong>

	                <?php 

	                $history_of_treatment = ($model->history_of_treatment)?json_decode($model->history_of_treatment,true):null; 
	                $values = ['News','Transfer-in','Re-treatment','Relapse','TALF','Treatment After Failure','PTOU'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($history_of_treatment)?$history_of_treatment:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                 $other =  isset($history_of_treatment['others'])?$history_of_treatment['others']:"";
			                echo '<div>Others: ' . $other . "</div>"; 
	                ?>
	                </div>
	                <div class=" col-md-6 col-xs-6">
	                	<div class="row">
			                <div class=" col-md-6 col-xs-6">
			                <strong>Disease Classification:</strong>

		                    <?php 
		                     $disease_classification = ($model->disease_classification)?json_decode($model->disease_classification,true):['']; 

				                $values = ['Pulmonary','Extra-pulmonary'];

				                $disease_classification = ($disease_classification == 'null')? []: $disease_classification;


				                for($x = 0 ; $x < sizeof($values) ; $x++){
				                  	if(in_array($values[$x], $disease_classification)){
			                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
			                    	}
			                    	else{
			                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
			                    	}

				                }

				                ?>  
			                </div>

			                <div class=" col-md-6 col-xs-6">
			                <strong>Reason For Examination:</strong>
			                
		                    <?php 
		                     $reason_for_examination = ($model->reason_for_examination)?json_decode($model->reason_for_examination,true):null; 
				                 $values = ['Diagnosis','Follow-up'];

				                $reason_for_examination = ($reason_for_examination == 'null')? []: $reason_for_examination;



				                for($x = 0 ; $x < sizeof($values) ; $x++){
				                  	if(in_array($values[$x], isset($reason_for_examination)?$reason_for_examination:[])){
			                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
			                    	}
			                    	else{
			                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
			                    	}

				                }

				                ?>  
			                </div>
		                </div>
		                <div class="row"  style="padding-top:20px;">
			                <div class="col-md-12 col-xs-12">
			                <strong>Type of specimen:</strong>
			                
		                    <?php 
		                     $type_of_specimen = ($model->type_of_specimen)?json_decode($model->type_of_specimen,true):null; 
				                 $values = ['Sputum'];
				                for($x = 0 ; $x < sizeof($values) ; $x++){
				                  	if(in_array($values[$x], isset($type_of_specimen)?$type_of_specimen:[])){
			                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
			                    	}
			                    	else{
			                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
			                    	}

				                }

				                $other =  isset($type_of_specimen['others'])?$type_of_specimen['others']:"";
				                echo '<div>Others: ' . $other . "</div>"; 
				                ?>  

			                </div>		                
		                </div>
	                </div>
	                <div class=" col-md-3 col-xs-3">
	                <strong>Test Requested:</strong>
	                
                    <?php 
                     $test_requested = ($model->test_requested)?json_decode($model->test_requested,true):null; 
				                $test_requested = ($test_requested == 'null')? []: $test_requested;

				                
		                $values = ['DSSM','Xpert MTB/RIF','Culture','DST','LPA'];
		                for($x = 0 ; $x < sizeof($values) ; $x++){
		                  	if(in_array($values[$x], isset($test_requested)?$test_requested:[])){
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
			

	</div>
</div>


