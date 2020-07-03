<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DotsOpdRecord */

$this->params['page'] = 'Tb';
$this->params['second'] = 'opd';
$this->title = $model->dots->PatientName;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->dots->id]];
$this->params['breadcrumbs'][] = ['label' => ' OPD Record'];
?>


<div class="activity-index ibox float-e-margins ibox-content"> 

    <p>
        <?= Html::a('Back', ['view', 'id' => $model->id], ['class' => 'btn btn-white']) ?>
        <?= Html::a('Print', '#', [
            'class' => 'btn btn-success btn-print-opd'
        ]) ?>
    </p>



	<div id="dots-opd-form" style="font-size: 15px">

		<div class="">
			<div class="container-fluid">

				<div class="row" style="text-align: center;"> 
					<h1>MUNICIPAL HEALTH OFFICE</h1>
					<h4>J.M. Loyola Street Barangay 4, Carmona, Cavite</h4>
					<h3>OPD RECORDS</h3>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div class="d-padding">
						<strong>Name:</strong> <span> <?= $model->dots->patientName ?> </span>
						</div>
					</div>
					<div class="col-md-3 col-xs-3">
						<div class="d-padding">
						<strong>Age:</strong> <span> <?= $model->dots->patient->age ?> </span>
						</div>
					</div>
					<div class="col-md-3 col-xs-3">
						<div class="d-padding">
						<strong>Civil Status:</strong> <span> <?= Yii::$app->params['civil_status'][$model->dots->patient->civil_status] ?> </span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div class="d-padding">
						<strong>Birthday:</strong> <span> <?= $model->dots->patient->birthday ?> </span>
						</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="d-padding">
						<strong>Address:</strong> <span> <?= $model->dots->patient->address ?> </span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
						<strong>Date:</strong> <span> <?= $model->date ?> </span>
						</div>
					</div>
					
				</div>

				<div class="row">
					<div class="col-md-2 col-xs-2">
						<div class="d-padding" style="border:unset">
						<strong>Vital Signs</strong>
						</div>
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="d-padding">
						<strong>BP:</strong> <span> <?= $model->bp ?> </span>
						</div>
					</div>	
					<div class="col-md-2 col-xs-2">
						<div class="d-padding">
						<strong>WT:</strong> <span> <?= $model->wt ?> </span>
						</div>
					</div>	
					<div class="col-md-2 col-xs-2">
						<div class="d-padding">
						<strong>PR:</strong> <span> <?= $model->pr ?> </span>
						</div>
					</div>	
					<div class="col-md-2 col-xs-2">
						<div class="d-padding">
						<strong>RR:</strong> <span> <?= $model->rr ?> </span>
						</div>
					</div>	
					<div class="col-md-2 col-xs-2">
						<div class="d-padding">
						<strong>T:</strong> <span> <?= $model->t ?> </span>
						</div>
					</div>																				
				</div>

<?php
 $smoking_hx = ($model->smoking_hx) ? json_decode($model->smoking_hx,true) : null; 

 ?>

				<div class="row">
					<div class="col-md-3 col-xs-3">
						<div class="d-padding" style="border:unset">
						<strong>Smoking Hx</strong>
						</div>
					</div>
					<div class="col-md-3 col-xs-3">
						<div class="d-padding">
						<strong>Current:</strong> <span> <?= isset($smoking_hx)?$smoking_hx[0]:"" ?> </span>
						</div>
						<div class="d-padding">
						<strong>Stick/day:</strong> <span> <?= isset($smoking_hx)?$smoking_hx[1]:"" ?> </span>
						</div>
					</div>
					<div class="col-md-3 col-xs-3">
						<div class="d-padding">
						<strong>Former:</strong> <span> <?= isset($smoking_hx)?$smoking_hx[2]:"" ?> </span>
						</div>
						<div class="d-padding">
						<strong>Years smoking:</strong> <span> <?= isset($smoking_hx)?$smoking_hx[3]:"" ?> </span>
						</div>
					</div>	
					<div class="col-md-3 col-xs-3">
						<div class="d-padding">
						<strong>Never:</strong> <span> <?= isset($smoking_hx)?$smoking_hx[4]:"" ?> </span>
						</div>
						<div class="d-padding">
						<strong>PackYear:</strong> <span> <?= isset($smoking_hx)?$smoking_hx[5]:"" ?> </span>
						</div>
					</div>									
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<strong>S>:</strong> <span> <?= $model->S ?> </span>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<strong>O>:</strong> <span> <?= $model->O ?> </span>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<strong>A>:</strong> <span> <?= $model->A ?> </span>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="d-padding">
							<strong>P>:</strong> <span> <?= $model->P ?> </span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>	