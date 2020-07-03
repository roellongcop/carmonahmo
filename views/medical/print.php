<?php

use yii\helpers\Html;

$this->params['page'] = 'Medical';
$this->params['second'] = 'Medical';
$this->title = $model->patientName;
$this->params['breadcrumbs'][] = ['label' => 'Medical', 'url' => ['/medical']];
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

    <div class="row">
        
        <div id="fecalysis-form">

                
            <div class="col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-4 col-xs-3">
                        <center>
                            <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg" width="100" height="100">
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                        <h2>MUNICIPAL HEALTH OFFICE</h2>
                        <h4>
                            CAMONA, CAVITE 
                            <br>Tel. No. <?= Yii::$app->template->getAbout('contact number') ?>
                        </h4>
                        </center> 
                    </div>

                    <div class="col-md-4 col-xs-3">
                        <center>
                            <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg" width="100" height="100">
                        </center>
                    </div>
                </div>

                <div class="row"><br><br></div>
                
                <div class="row">
                    <div class="col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8">
                        Date: <span class="underline"><?= date('F d, Y') ?></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                        <div class="col-md-12 col-xs-12">
                            To whom it may concern:
                        </div>
                        <div class="row"><br><br></div>
                        <div class="col-md-4 col-xs-4">
                            This is to certify that Mr. / Mrs. / Ms. 
                        </div>
                        <div class="col-md-8 col-xs-8 underline" style="margin-left: -7%;">
                            <?= $model->patientName ?>
                        </div>

                        <div class="row"><br><br></div>

                        <div class="col-md-4 col-xs-4">
                            years old male/female residing at 
                        </div>
                        <div class="col-md-8 col-xs-8 underline" style="margin-left: -8%;">
                            <?= $model->patient->address ?>
                        </div>

                        <div class="row"><br><br></div>

                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-10 col-xs-10 underline"> &nbsp;
                            </div>
                            <div class="col-md-1 col-xs-1"> 
                                consulted
                            </div>
                        </div>

                        <div class="row"><br><br></div>

                        <div class="col-md-3 col-xs-4"> 
                            the udersigned because of
                        </div>
                        <div class="col-md-8 col-xs-7 underline"> 
                            <?= $model->chief_complaint ?>
                        </div>

                        <div class="row"><br><br></div>

                        <div class="col-md-4 col-xs-6 col-md-offset-1 col-xs-offset-1"> 
                            He/She was then diagnosed to have
                        </div>
                        <div class="col-md-7 col-xs-5 underline" style="margin-left: -7%"> 
                            <?= $model->primary_diagnosis ?>
                        </div>

                        <div class="col-md-7 col-xs-7 col-md-offset-4 col-xs-offset-4"> 
                            <center>
                                Diagnosis
                            </center>
                        </div>

                        <div class="row"><br><br></div>

                        <div class="col-md-2 col-xs-2"> 
                            and was 
                        </div>


                        <div class="col-md-10 col-xs-10 underline" style="margin-left: -6%"> 
                            <?= Yii::$app->user->identity->fullname ?>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-xs-3 col-md-offset-1 col-xs-4"> 
                                <center>Meds./Rest./Etc.</center>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-11 col-xs-11 underline" style="margin-left: 2%">
                                    <?= $model->treatment ?>
                                </div>
                            </div>
                        </div>

                        <div class="row"><br><br></div>


                        <div class="col-md-12 col-xs-12"> 
                            This certification was issued upon patients/patients relative request.
                        </div>

                        <div class="row"><br><br></div>

                        <div class="col-md-4 col-xs-4 col-md-offset-8 col-xs-offset-8"> 
                            <center>
                                <b>DESMOND M. OESMER, M.D    </b> <br>
                                Rural Health Physician
                            </center>
                        </div>

                    
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
