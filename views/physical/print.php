<?php

use yii\helpers\Html;

$this->params['page'] = 'Physical';
$this->title = $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Physical', 'url' => ['/physical']];
$this->params['breadcrumbs'][] = $this->title;
?> 
 
<div class="department-create ibox float-e-margins ibox-content">


    <div class="fecalysis-view"> 

        <p>
            <div class="btn-group">
                <?= Html::a('Print', '#', [
                    'class' => 'btn btn-success btn-print-fecalysis'
                ]) ?>
            </div>
        </p>
        <div id="fecalysis-form">
            <div class="row">
                <div class="col-md-12 col-xs-12">

                    <di class="row">
                        <div class="text-center">
                            <h2>Municipal Health Office of Carmona, Cavite<br> 
                                <b>PHYSICAL MEDICINE AND REHABILITATION DEPT.</b>
                            </h2>
                        </div>
                    </di>
                    <div class="row"> <br> </div>


                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="col-md-2 col-xs-3"> NAME: </div>
                            <div class="col-md-10 col-xs-9 underline">
                                <?= $model->patient ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <div class="col-md-3 col-xs-3"> AGE: </div>
                            <div class="col-md-7 col-xs-7 col-md-offset-2 col-xs-offset-2 underline">
                                <?= $model->user->age ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <div class="col-md-3 col-xs-4"> GENDER: </div>
                            <div class="col-md-7 col-xs-6 col-md-offset-2 col-xs-offset-2 underline">
                                <?= $model->user->sex ?>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <br> </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-1 col-xs-2"> ADDRESS: </div>
                            <div class="col-md-11 col-xs-10 underline">
                                <?= $model->user->address ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row"> <br> </div>

                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="col-md-3 col-xs-4"> CIVIL STATUS: </div>
                            <div class="col-md-9 col-xs-8 underline">
                                <?= Yii::$app->params['civil_status'][$model->user->civil_status] ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="col-md-3 col-xs-4"> OCCUPATION: </div>
                            <div class="col-md-9 col-xs-8 underline">
                                <?= $model->occupation ?>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <br> </div>


                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-1 col-xs-2"> DIAGNOSIS: </div>
                            <div class="col-md-11 col-xs-10  underline" >
                                <?= $model->diagnosis ?>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <br> </div>


                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="col-md-2 col-xs-2"> DATE: </div>
                            <div class="col-md-3 col-xs-3 underline">
                                <?= $model->date ?>
                            </div>
                            <div class="col-md-2 col-xs-2"> TIME: </div>
                            <div class="col-md-3 col-xs-4 underline">
                                <?= date('H:i:s A', strtotime($model->time)) ?>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <br> </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-2 col-xs-2"> VITAL SIGNS: BP: </div>
                            <div class="col-md-1 col-xs-1 underline" style="margin-left: -30px;">  
                                <?= $model->bp ?>
                            </div>
                            <div class="col-md-1 col-xs-1">  PR:</div>
                            <div class="col-md-1 col-xs-1 underline" style="margin-left: -25px;">  
                                <?= $model->pr ?>
                            </div>
                            <div class="col-md-1 col-xs-1">  RR:</div>
                            <div class="col-md-1 col-xs-1 underline" style="margin-left: -25px;">  
                                <?= $model->rr ?>
                            </div>
                            <div class="col-md-1 col-xs-1">  TEMP:</div>
                            <div class="col-md-1 col-xs-1 underline" style="margin-left: -10px;">  
                                <?= $model->temp ?>
                            </div>
                            <div class="col-md-1 col-xs-1">  WT:</div>
                            <div class="col-md-1 col-xs-1 underline" style="margin-left: -25px;">  
                                <?= $model->wt ?>
                            </div>
                        </div>
                    </div>

                    <div class="row"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>

                    <div class="row">
                        <div class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2 text-center topline">
                            <h4>ANANIAS GILBUENA, JR MD, OTRP, FPARM, DPBRM</h4>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
