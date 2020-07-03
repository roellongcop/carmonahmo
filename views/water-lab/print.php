<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WaterLab */
$this->params['page'] = 'Waterlab';
$this->title = ucwords($model->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['/water-lab']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="activity-index ibox float-e-margins ibox-content"> 

    <p>
        <?= Html::a('Back', ['view', 'id' => $model->id], ['class' => 'btn btn-white']) ?>
        <?= Html::a('Print', '#', [
            'class' => 'btn btn-success btn-print-water-lab'
        ]) ?>
    </p>



<div id="water-lab-form" style="font-size: 11px">

	<div class="">
		<div class="container-fluid">
			<div class="row" style="text-align: center;">
				<h3>REPUBLIC OF THE PHILIPPINES</h3>
				<h3>REGION IV</h3>
				<h3>PROVINCE OF CAVITE</h3>
				<h3>MUNICIPALITY OF CARMONA</h3>
				<h3>REGIONAL WATER LABORATORY</h3>
				<br>
				<h3>REQUEST FOR ANALYSIS OF WATER</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-xs-3">
					<div class="d-padding" style="border-bottom:unset">
						1. Sampling Collected by:
					</div>	
				</div>
				<div class="col-md-4 col-xs-4">
					<div class="d-padding">
						<?= isset($model->sampling_collected_by)?$model->sampling_collected_by:" " ?>
					</div>	
				</div>

			</div>
			<div class="row">
				<div class="col-md-3 col-xs-3">
					<div class="d-padding" style="border-bottom:unset">
						2. Sampling Date and time:
					</div>	
				</div>
				<div class="col-md-8 col-xs-8">
					<div class="d-padding">
						<?= isset($model->sampling_date_time)?$model->sampling_date_time:" " ?>
					</div>	
				</div>

			</div>
			<div class="row" style="padding-top:20px">
		    	<div class="col-md-4 col-xs-4">
			    	<strong>3. Sampling Point:</strong>

	                <?php 

	                $sampling_point = ($model->sampling_point)?json_decode($model->sampling_point,true):null; 
	                $values = ['Pumps','Tank','House Faucet','Fire Hydrant','Flowing','River'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($sampling_point)?$sampling_point:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>4. Specify Address Sampling Point:</strong>
			    	<br>
			    	<?= $model->specify_address_sampling_point ?>

                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>5. Source of Water Supply:</strong>

	                <?php 

	                $source_of_water_supply = ($model->source_of_water_supply)?json_decode($model->source_of_water_supply,true):null; 
				                $source_of_water_supply = ($source_of_water_supply == 'null')? []: $source_of_water_supply;
	                $values = ['Deep Well','Shallow','River','Lake','Spring Developed','Spring Undeveloped'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($source_of_water_supply)?$source_of_water_supply:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>

			</div>
			<div class="row" style="padding-top:20px">
		    	<div class="col-md-4 col-xs-4">
			    	<strong>6. Type of Ownership:</strong>

	                <?php 

	                $type_of_ownership = ($model->type_of_ownership)?json_decode($model->type_of_ownership,true):null; 
				                $type_of_ownership = ($type_of_ownership == 'null')? []: $type_of_ownership;

	                $values = ['Private','Public','Local Waterworks'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($type_of_ownership)?$type_of_ownership:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>7. Type of Well:</strong>

	                <?php 

	                $type_of_well = ($model->type_of_well)?json_decode($model->type_of_well,true):null; 
	                 $values = ['DUG','BORED','DRILLED','SANITARY'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($type_of_well)?$type_of_well:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>

                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>8. Well Usage:</strong>

	                <?php 

	                $well_usage = ($model->well_usage)?json_decode($model->well_usage,true):null; 
				                $well_usage = ($well_usage == 'null')? []: $well_usage;


	                $values = ['New (Not yet in use) ','Recent (in use less than 3 months) ','Old (in use for over 3 months)'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($well_usage)?$well_usage:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>

			</div>


			<div class="row" style="padding-top:20px">
		    	<div class="col-md-4 col-xs-4">
			    	<strong>9. Pump Required Priming:</strong>

	                <?php 

	                $pump_required_priming = ($model->pump_required_priming)?json_decode($model->pump_required_priming,true):null; 
	                $values = ['Yes','No'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($pump_required_priming)?$pump_required_priming:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>10. Repair Done Within 2 Months:</strong>

	                <?php 

	                $repair_done_within_2_months = ($model->repair_done_within_2_months)?json_decode($model->repair_done_within_2_months,true):null; 

				                $repair_done_within_2_months = ($repair_done_within_2_months == 'null')? []: $repair_done_within_2_months;



	                $well_usage = ($model->well_usage)?json_decode($model->well_usage,true):null; 


	                $values = ['None','Pump','Rod','Cleaned Well'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($repair_done_within_2_months)?$repair_done_within_2_months:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>

                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>11. Water treated:</strong>

	                <?php 

	                $water_treated = ($model->water_treated)?json_decode($model->water_treated,true):null; 
				                $water_treated = ($water_treated == 'null')? []: $water_treated;


	                $values = ['Yes','No'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($water_treated)?$water_treated:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>

			</div>


			<div class="row" style="padding-top:20px">
		    	<div class="col-md-4 col-xs-4">
			    	<strong>12. Distance from Well of the Following in Meter:</strong>

	                <?php 

	                $distance_from_well_of_the_following_in_meter = ($model->distance_from_well_of_the_following_in_meter)?json_decode($model->distance_from_well_of_the_following_in_meter,true):null; 

				                $distance_from_well_of_the_following_in_meter = ($distance_from_well_of_the_following_in_meter == 'null')? []: $distance_from_well_of_the_following_in_meter;


	                $values = ['Privy','Septic Tank','Cesspool','Stagnant Water','Sea and others','Piggery, Poultry or animal house','Hospital Effluent','Cemetery','Canal','Garbage/Dumpsite'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($distance_from_well_of_the_following_in_meter)?$distance_from_well_of_the_following_in_meter:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>
                </div>
		    	<div class="col-md-4 col-xs-4">
			    	<strong>13. Analysis Requested:</strong>

	                <?php 

	                $analysis_requested = ($model->analysis_requested)?json_decode($model->analysis_requested,true):null; 
				                $analysis_requested = ($analysis_requested == 'null')? []: $analysis_requested;

				                
	                $values = ['BACTERIOLOGICAL','BIOLOGICAL','PHYSICAL / CHEMICAL'];
	                for($x = 0 ; $x < sizeof($values) ; $x++){

	                	if(in_array($values[$x], isset($analysis_requested)?$analysis_requested:[])){
	                    		echo '<div><i class="fa fa-check-square"></i> ' . $values[$x].'</div>';
	                    	}
	                    	else{
	                    		echo '<div><i class="fa fa-square-o"></i> ' . $values[$x].'</div>';
	                    	}

			               
	                }
	                ?>		

	                <div style="padding-top:20px"><u>
	                <strong>Parameters to be Examined:</strong><br>
	                <?=  $model->parameters_to_be_examined ?>
	                </u></div>

                </div>
		    	<div class="col-md-4 col-xs-4">
			    	
					<div class="col-md-12 col-xs-12">
						<div class="d-padding" style="padding:unset">
							<div><strong>14. Name:</strong>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 <?= $model->patientName ?> </div>
						</div>	
					</div>
					<div class="col-md-12 col-xs-12">
						<div class="d-padding" style="padding:unset">
							<div><strong>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							Desination:</strong> <?= $model->designation ?> </div>
						</div>	
					</div>
					<div class="col-md-12 col-xs-12">
						<div class="d-padding" style="padding:unset">
							<div>
							<strong>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address:</strong> 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->patient->address ?> </div>
						</div>	
					</div>

                </div>
			</div>

			<div class="row" style="padding-top: 20px">
		    	<div class="col-md-6 col-xs-6">
			    	<strong>(For Laboratory Personnel)</strong>
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<div><strong>Received By:</strong> <?= $model->received_by ?> </div>
						</div>	
					</div>
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<div><strong>Date and Time:</strong> <?= $model->date_time ?> </div>
						</div>	
					</div>
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<div><strong>Laboratory No.:</strong> <?= $model->labaratory_no ?> </div>
						</div>	
					</div>

                </div>
                <div class="col-md-2 col-xs-2"></div>
                
                <div class="col-md-4 col-xs-4">
	                <div class="d-padding" style="padding-top: 50px;text-align: center;"> 
	                	<?= $model->location_of_well ?>
	                </div>
	                <div style="text-align: center;">
	                <strong >Location of Well</strong>
	                </div>
                </div>
			</div>


		</div>
	</div>
</div>