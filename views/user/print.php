<?php

use yii\helpers\Html;
use app\models\User;

$this->params['page'] = 'User'; 
$this->title = ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['/user']];
$this->params['breadcrumbs'][] = $this->title;
$medical = isset($model->medical[0]) ? $model->medical[0] : User::findOne($model->id);
?> 
 <style>
     th {
        text-transform: capitalize;
     }
 </style>
<div class="department-create ibox float-e-margins ibox-content">


<div class="fecalysis-view"> 

    <p>
        <div class="btn-group">
            <?= Html::a('Back', ['view', 'id' => $model->id], ['class' => 'btn btn-white']) ?>
            <?= Html::a('Print', '#', [
                'class' => 'btn btn-success btn-print-fecalysis'
            ]) ?>
        </div>
    </p>


    <div id="fecalysis-form">
        <div class="row">
            <div class="col-md-4 col-xs-4 text-center">
                <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg" style="    width: 100px;"> <br><br>
            </div>
            <div class="col-md-4 col-xs-4">
                <div class="text-center">
                    <h4><b>Municipal Health Office</b></h4>
                    <h3><b>Carmona, Cavite</b></h3>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 text-center">
                <img src="<?= Yii::$app->urlManager->baseUrl ?>/resources/backend/img/images.jpg" style="    width: 100px;"> <br><br>
            </div>
        </div>
        
 

  
        <table class="table table-bordered">
            <tr>
                <th>Date: </th>
                <td><?= isset($medical->fdate) ? $medical->fdate: '' ?></td>
                <th> Family Serial No</th>
                <td colspan="9"><?= $model->family_household_number ?></td>
            </tr>

            <tr>
                <th>Fullname</th> 
                <td><?= ucwords($model->name) ?></td>
                <th>Gender:</th> 
                <td><?= $model->sex ?></td>
                <th>Age:</th> 
                <td><?= $model->age ?></td>
                <th>Birthday:</th> 
                <td><?= $model->birthday ?></td>
                <th>Brgy:</th> 
                <td colspan="3"><?= $model->address ?></td>
            </tr>

            <tr>
                <th>Educational Att:</th> 
                <td><?= $model->education ?></td>
                <th>Employment Stat:</th> 
                <td><?= $model->employment ?></td>
                <th>Civil Stat:</th> 
                <td colspan="7"><?= $model->civil ?></td>
            </tr>

            <tr>
                <th>DSWD-NHTSMember:</th> 
                <td><?= $model->dswd_nhtsmember ? 'Yes': 'No' ?></td>
                <th>Family Household No.:</th> 
                <td colspan="9"><?= $model->family_household_number ?></td> 
            </tr>

            <tr>
                <th>4P's Member:</th> 
                <td><?= $model->family_household_number ? 'Yes': 'No' ?></td>
                <th>Household No.:</th> 
                <td colspan="9"><?= $model->family_household_number ?></td> 
            </tr>

            <tr>
                <th>Philhealth Member:</th> 
                <td></td>
                <th>Mem.</th> 
                <th>Dep.</th> 
                <th>Philhealth No.:</th> 
                <td colspan="7"></td> 
            </tr>

            <tr>
                <th>Chief Complaints:</th> 
                <td><?= isset($medical->chief_complaint) ? $medical->chief_complaint: '' ?></td>
                <th>LMP</th> 
                <td colspan="9"></td> 
            </tr>

            <tr>
                <th>BP:</th>
                <td></td>

                <th>CR:</th>
                <td></td>

                <th>RR:</th>
                <td></td>

                <th>Temp:</th>
                <td></td>

                <th>Wt:</th>
                <td></td>

                <th>Ht:</th>
                <td></td>
            </tr>
            <tr>
                <th colspan="3">Pertient PE <br> FINDINGS</th>
                <th colspan="9">Management:</th>
            </tr>

            <tr>
                <td rowspan="2" colspan="11"><?= isset($medical->primary_diagnosis)? $medical->primary_diagnosis: '' ?> </td>
                <td rowspan="2" colspan="11"></td>
            </tr>
            <tr></tr>
            <tr>
                <th colspan="3">Lab. Request:</th>
                <th colspan="9">Diagnosis:</th>
            </tr>

            <tr>
                <th colspan="3">Lab. Results</th>
                <td colspan="9"><?= isset($medical->other_diagnosis)? $medical->other_diagnosis: '' ?></td>
            </tr>
            <tr></tr>
            <tr>
                <td colspan="3"></td>
                <th>Physician:</th>
                <td colspan="8"></td>
            </tr>

        </table>
           
         
    </div>

</div>
