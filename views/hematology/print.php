<?php

use yii\helpers\Html;

$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Hematology';
$this->title = $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Hematology', 'url' => ['/hematology']];
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
        
        <?= $this->render('/layouts/print_header', [
            'title' => 'HEMATOLOGY',
            'model' => $model
        ]) ;?>
        
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center"> COMPONENT </th>
                        <th class="text-center"> RESULT </th>
                        <th class="text-center"> REFERENCE VALUE </th>
                        <th class="text-center"> COMPONENT </th>
                        <th class="text-center"> RESULT </th>
                        <th class="text-center"> REFERENCE VALUE </th>
                    </tr>
                    <tr>
                        <td> HEMOGLOBIN </td>
                        <td> <?= $model->hemoglobin ?> </td>
                        <td>
                            MALE: 120 - 170 g/L <br>
                            FEMALE: 110 - 150 g/L
                        </td>
                        <td> RETICULOCYTE </td>
                        <td> <?= $model->reticulocyte ?> </td>
                        <td> 0.5 - 1.5% </td>
                    </tr>

                    <tr>
                        <td> HEMATOCRIT </td>
                        <td> <?= $model->hematocrit ?> </td>
                        <td>
                            MALE: 0.40 - 0.54  <br>
                            FEMALE: 0.37 - 0.47 
                        </td>
                        <td> PLATELET </td>
                        <td> <?= $model->platelet ?> </td>
                        <td> 150 - 400 x 10 <sup>9</sup> </td>
                    </tr>

                    <tr>
                        <td> LEUKOCYTE </td>
                        <td> <?= $model->leokocyte ?> </td>
                        <td> 5.0 - 10.0 x 10 <sup>9</sup> L </td>
                        <td> EST </td>
                        <td> <?= $model->esr ?> </td>
                        <td>
                            MALE: 0 - 15 mm/hr  <br>
                            FEMALE: 0 - 20 mm/hr
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="2"> ERYTHROCYTE </td>
                        <td rowspan="2"> <?= $model->erythrocyte ?> </td>
                        <td rowspan="2">
                            MALE: 4.5 - 6.0 x 10 <sup>12</sup>/L  <br>
                            FEMALE: 4.0 - 5.5 x 10 <sup>12</sup>/L  
                        </td> 
                        <td> BEEDING TIME </td>
                        <td> <?= $model->bleeding_time ?> </td>
                        <td> 1 - 7 mins. </td>
                    </tr>
                    <tr>
                        <td> CLOTTING TIME </td>
                        <td> <?= $model->clotting_time ?> </td>
                        <td> 3 - 5 mins. </td>
                    </tr> 

                    <tr>
                        <td colspan="3"> LEUKOCYTE DIFFERENTIAL COUNT </td>
                        <td colspan="3"></td>
                    </tr>

                    <tr>
                        <td> BANDS </td>
                        <td> <?= $model->bands ?> </td>
                        <td> 0 - 5 </td>
                        <td> NUCLEATED RBC </td>
                        <td colspan="2"> <?= $model->nucleated_rbc ?> </td>
                    </tr>

                    <tr>
                        <td> SEGMENTERS </td>
                        <td> <?= $model->segmenters ?> </td>
                        <td> 50 - 70 </td>
                        <td> MALARIAL SMEAR </td>
                        <td colspan="2"> <?= $model->malarial_smear ?> </td>
                    </tr>

                    <tr>
                        <td> EOSINOPHIL </td>
                        <td> <?= $model->eosinophil ?> </td>
                        <td> 0 - 5 </td>
                        <td> TOXIC GRANULATION </td>
                        <td colspan="2"> <?= $model->malarial_smear ?> </td>
                    </tr>

                    <tr>
                        <td> BASOPHIL </td>
                        <td> <?= $model->basophil ?> </td>
                        <td> 0 - 1 </td>
                        <td colspan="3"> </td>
                    </tr>

                    <tr>
                        <td> LYMPHOCYTES </td>
                        <td> <?= $model->lymphocytes ?> </td>
                        <td> 20 - 40 </td>
                        <td> BLOOD/Rh TYPE </td>
                        <td colspan="2"> <?= $model->blood_rh_type ?> </td>
                    </tr>

                    <tr>
                        <td> MONOCYTES </td>
                        <td> <?= $model->monocytes ?> </td>
                        <td> 0 - 7 </td>
                        <td colspan="3"> </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> OTHERS </td>
                        <td colspan="2"> </td>
                    </tr>

                    <tr>
                        <td> <p></p> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>

                </table>
            </div>
        </div>

        <br> <br> <br>
        <div class="row text-center">
            <div class="col-md-6 col-xs-6">
                <div class="col-md-4 col-xs-4 col-md-offset-4 col-xs-offset-4 topline">
                    <p>Medical Technologist</p>
                </div>
            </div>
                
            <div class="col-md-6 col-xs-6">
                <div class="col-md-4 col-xs-4 col-md-offset-4 col-xs-offset-4">
                    <b><?= $model->path ?></b>
                    <p>Pathologist</p>
                </div>
            </div>
        </div>
         
    </div>

</div>
