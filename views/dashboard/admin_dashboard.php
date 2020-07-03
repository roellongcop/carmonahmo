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
        <div class="col-md-3 item-stat" data-key="full">
            <div class="widget style1 navy-bg" >
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-spinner fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> PENDING APPOINTMENTS </span>
                        <h2 class="font-bold">
                            <?= $pending ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 item-stat" data-key="good">
            <div class="widget style1 blue-bg" >
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <i class="fa fa-group fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> OUR CLINIC PATIENTS </span>
                        <h2 class="font-bold">
                            <?= $patients ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 item-stat" data-key="critical">
            <div class="widget style1 yellow-bg" >
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-child fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> BIRTHING PROGRAM </span>
                        <h2 class="font-bold">
                            <?= $birthing ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 item-stat" data-key="empty">
            <div class="widget style1 red-bg" >
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-user-md fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> CLINIC MEDICAL STAFFS </span>
                        <h2 class="font-bold">
                            <?= $staffs ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row"> <hr>
        <div class="col-md-10 col-md-offset-1">
            <p class="lead text-center">OVER ALL RESERVATION CHART (<?= date('Y') ?>)</p>
            <div class="flot-chart">
                <canvas id="fast" height="100"></canvas>
            </div>
        </div> 
    </div>

    <div class="row"> <br><hr><br> </div>

    <div class="row"> <hr>
        <div class="col-md-10 col-md-offset-1">
            <p class="lead text-center">PATIENT PER DEPARTMENT (<?= date('Y') ?>)</p>
            
            
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#summary">Summary</a></li>
                <li><a data-toggle="tab" href="#physical" id="t-physical">Physical</a></li>
                <li><a data-toggle="tab" href="#clinical">Clinical</a></li>
                <li><a data-toggle="tab" href="#dots">DOTS</a></li>
                <li><a data-toggle="tab" href="#birthing">Birthing</a></li>
                <li><a data-toggle="tab" href="#dental">Dental</a></li>
                <li><a data-toggle="tab" href="#water">Water Laboratory</a></li>
            </ul>
            
            <div class="tab-content">
                <div id="summary" class="tab-pane fade in active"> <br><br>
                    <div class="flot-chart">
                        <canvas id="per-department" height="100"></canvas>
                    </div>
                </div>
                <div id="physical" class="tab-pane fade"><br><br>
                    <div class="loader"></div>
                    
                    <div class="flot-chart">
                        <canvas id="c-physical" height="100"></canvas>
                    </div>
                </div>
                <div id="clinical" class="tab-pane fade"><br><br>
                    <div class="loader"></div>
                    
                    <div class="flot-chart">
                        <canvas id="c-clinical" height="100"></canvas>
                    </div>
                </div>
                <div id="dots" class="tab-pane fade"><br><br>
                    <div class="loader"></div>
                    
                    <div class="flot-chart">
                        <canvas id="c-dots" height="100"></canvas>
                    </div>
                </div>
                <div id="birthing" class="tab-pane fade"><br><br>
                    <div class="loader"></div>
                    
                    <div class="flot-chart">
                        <canvas id="c-birthing" height="100"></canvas>
                    </div>
                </div>
                <div id="dental" class="tab-pane fade"><br><br>
                    <div class="loader"></div>
                    
                    <div class="flot-chart">
                        <canvas id="c-dental" height="100"></canvas>
                    </div>
                </div>
                <div id="water" class="tab-pane fade"><br><br>
                    <div class="loader"></div>
                    
                    <div class="flot-chart">
                        <canvas id="c-water" height="100"></canvas>
                    </div>
                </div>
            </div>

        </div> 
    </div>
    
    




    <div class="row"> <br> <br> <br> <br> <br> <br><br> <br> <br><hr> </div>
</div>


<?php

$script = <<< JS
$(document).ready(function() {
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    var createData = function(labels, data, title="", color="#1c84c6") {
        var barData = {
            labels: labels,
            datasets: [{
                label: "Graphical Presentation of " + title,
                fillColor: color,
                strokeColor: color,
                highlightFill: "rgba(26,179,148,0.75)",
                highlightStroke: "rgba(26,179,148,1)",
                data: data
            } ]
        };

        return barData;
    }
    
    
    var createOptions = function() {
        var barOptions = {
            scaleBeginAtZero: true,
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            barShowStroke: true,
            barStrokeWidth: 2,
            barValueSpacing: 5,
            barDatasetSpacing: 1,
            responsive: true,
        };

        return barOptions;
    }
    

    var createChart = function(url, id, title) { 
        $('.loader').show();
        
 
        $.ajax({
            url: base_url + url,
            dataType: 'json',
            success: function(response) {  
                var ctx = document.getElementById(id).getContext("2d");
                var myNewChart = new Chart(ctx).Bar(
                    createData(months, response, title), 
                    createOptions()
                ); 
                
                $('.loader').hide(); 
                $('#' + id).show();
            }
        });
    }
    
     
    
    var appointmentChart = function()
    {
        // APPOINTMENT
        $.ajax({
            url: base_url + 'appointment/chart',
            dataType: 'json',
            success: function(response) { 
    
                var ctx = document.getElementById("fast").getContext("2d");
    
                var myNewChart = new Chart(ctx).Bar(
                    createData(months, response, 'Appointments', 'rgba(12, 202, 50, 0.8)'), 
                    createOptions()
                );
     
            }
        });
    }
    
    
    
    var summaryChart = function()
    {
        // SUMMARY
        $.ajax({
            url: base_url + 'dashboard/patient-chart',
            dataType: 'json',
            success: function(response) {
                var labels = ['Physical Rehabilitation', 'Clinical Laboratory', 'DOTS', 'Birthing', 'Dental', 'Water Laboratory'];
         
                var ctx = document.getElementById("per-department").getContext("2d");
                var myNewChart = new Chart(ctx).Bar(
                    createData(labels, response, 'PatientsSummary'), 
                    createOptions()
                );
     
            }
        });
    }
     
    
    $('#t-physical').on('click', function() { 
        $('#c-physical').hide();
        createChart('dashboard/physical', 'c-physical', 'Physical Department'); 
    })
    
    $('a[href="#clinical"]').on('click', function() {
        $('#c-clinical').hide();
        createChart('dashboard/clinical', 'c-clinical', 'Clinical Department');
    })
    
    $('a[href="#dots"]').on('click', function() { 
        $('#c-dots').hide(); 
        createChart('dashboard/dots', 'c-dots', 'DOTS Department');
    })
    
    $('a[href="#birthing"]').on('click', function() {
        $('#c-birthing').hide();
        createChart('dashboard/birthing', 'c-birthing', 'Birthing Department');
    })
    
    $('a[href="#dental"]').on('click', function() {
        $('#c-dental').hide();
        createChart('dashboard/dental', 'c-dental', 'Dental Department');
    })
    
    $('a[href="#water"]').on('click', function() {
        $('#c-water').hide();
        createChart('dashboard/water', 'c-water', 'Water Laboratory Department');
    })
    
    
    appointmentChart();
    summaryChart();
    

    
  
})
JS;

$this->registerJS($script);