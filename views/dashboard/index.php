<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Dashboard';
$this->title = 'Dashboard';
 
?>
<div class="dashboard-index ibox float-e-margins ibox-content">

 	<div class="row">
 	    <div class="col-md-12">
 	        <?php if(Yii::$app->session->hasFlash('success')) : ?>
            	<div class="alert alert-success">
            	  	<strong>Success!</strong>
            	  	<?= Yii::$app->session->getFlash('success') ?>
            	</div>
            <?php endif ?>
            
            
            <?php if(Yii::$app->session->hasFlash('info')) : ?>
            	<div class="alert alert-info alert-dismissible">
            	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            	  	<strong>Information!</strong>
            	  	<?= Yii::$app->session->getFlash('info') ?>
            	</div>
            <?php endif ?>
            
            
            <?php if(Yii::$app->session->hasFlash('warning')) : ?>
            	<div class="alert alert-warning alert-dismissible">
            	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            	  	<strong>Warning!</strong>
            	  	<?= Yii::$app->session->getFlash('warning') ?>
            	</div>
            <?php endif ?>
            
            
            <?php if(Yii::$app->session->hasFlash('danger')) : ?>
            	<div class="alert alert-danger alert-dismissible">
            	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            	  	<strong>Error!</strong>
            	  	<?= Yii::$app->session->getFlash('danger') ?>
            	</div>
            <?php endif ?>
 	    </div>
	    <div class="col-md-6">
	        
			<h2>Appointments (<?= $total_appointments ?>)</h2>
	    	<div class="row"> 
	    		<div class="col-md-4">
		            <div class="ibox">
		                <div class="ibox-content">
		                    <h5 class="m-b-md">Birthing</h5>
		                    <h2 class="">
		                        <i class="fa fa-child"></i> <?= $total_birthing ?>
		                    </h2>
		                </div>
		            </div>
	    		</div>

	    		<div class="col-md-4">
		            <div class="ibox">
		                <div class="ibox-content">
		                    <h5 class="m-b-md">Physical</h5>
		                    <h2 class="">
		                        <i class="fa fa-male"></i> <?= $total_physical ?>
		                    </h2>
		                </div>
		            </div>
	    		</div>
	    		<div class="col-md-4">
		            <div class="ibox">
		                <div class="ibox-content">
		                    <h5 class="m-b-md">DOTS</h5>
		                    <h2 class="">
		                        <i class="fa fa-h-square"></i> <?= $total_dots ?>
		                    </h2>
		                </div>
		            </div>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4">
		            <div class="ibox">
		                <div class="ibox-content">
		                    <h5 class="m-b-md">WaterLab</h5>
		                    <h2 class="">
		                        <i class="fa fa-hospital-o"></i> <?= $total_water ?>
		                    </h2>
		                </div>
		            </div>
	    		</div>
	    		<div class="col-md-4">
		            <div class="ibox">
		                <div class="ibox-content">
		                    <h5 class="m-b-md">Dental</h5>
		                    <h2 class="">
		                        <i class="fa fa-medkit"></i> <?= $total_dental ?>
		                    </h2>
		                </div>
		            </div>
	    		</div>
	    		<div class="col-md-4">
		            <div class="ibox">
		                <div class="ibox-content">
		                    <h5 class="m-b-md">Checkups</h5>
		                    <h2 class="">
		                        <i class="fa fa-user-md"></i> <?= $total_medical ?>
		                    </h2>
		                </div>
		            </div>
	    		</div>
	    	</div>
	    </div>
	    <div class="col-md-6">
	        <div class="ibox float-e-margins">
	        		<div class="pull-left">
	                	<h2>Appointment Chart</h2>
	        		</div>
	        		<div class="pull-right">
	                <div class="ibox-tools">
	                    <a class="collapse-link">
	                        <i class="fa fa-chevron-up"></i>
	                    </a> 
	                    <a class="close-link">
	                        <i class="fa fa-times"></i>
	                    </a>
	                </div>
	        		</div>
	            <div class="ibox-content">
	                <div class="flot-chart">
                    	<div class="flot-chart-pie-content" id="flot-pie-chart"></div>
	                </div>
	            </div>
	        </div>
	    </div> 
	</div>
</div>


<?php

$script = <<< JS
$(document).ready(function() {
	
	var generated = [];

	function createColor(limit = 6) {

        var colors = ["red", "orange", "yellow", "green", "blue", "indigo", "violet", "cyan", "gray", "#00FFFF", "#8A2BE2", "#A52A2A", "#7FFF00", "#5F9EA0", "#006400", "#FF1493"];

        var color = colors[(Math.floor(Math.random() * colors.length))];
        if(generated.includes(color)) {
        	createColor();
        } 
        generated.push(color);
        return color;
    }

		    
	$.ajax({
		url: base_url + 'dashboard/get-reservation-chart',
		dataType: 'json',
		success: function(response) {
			
		    
			var records = [];

			response.forEach(data => {
				records.push({
					label: data.name,
					data: Number(data.total),
					color: createColor()
				});
			});



			var plotObj = $.plot($("#flot-pie-chart"), records, {
		        series: {
		            pie: { show: true }
		        },
		        grid: {
		            hoverable: true
		        },
		        tooltip: true,
		        tooltipOpts: {
		            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
		            shifts: {
		                x: 20,
		                y: 0
		            },
		            defaultTheme: false
		        }
		    });
			

		}
	});

	

    
})
JS;

$this->registerJS($script);