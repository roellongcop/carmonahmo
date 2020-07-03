<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fecalysis */

$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Fecalysis';
$this->title = $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Fecalysis', 'url' => ['/fecalysis']];
$this->params['breadcrumbs'][] = $this->title;
?> 
<div class="department-create ibox float-e-margins ibox-content">


<div class="fecalysis-view"> 

    <p>
        <?= Html::a('Print', '#', [
            'class' => 'btn btn-success btn-print-fecalysis'
        ]) ?>
    </p>


    <div id="fecalysis-form">
        
        <?= $this->render('/layouts/print_header', [
            'title' => 'FECALYSIS',
            'model' => $model
        ]) ;?> 
        
        <hr>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th colspan="3" class="text-center">MACROSCOPIC</th>
                        </tr>
                        <tr>
                            <td colspan="2">COLOR</td>
                            <td><?= $model->color ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">CONSISTENCY</td>
                            <td><?= $model->consistency  ?></td>
                        </tr>
                        <tr>
                            <td colspan="3"> &nbsp; </td>
                        </tr>
                        <tr>
                            <th colspan="3" class="text-center">MICROSCOPIC</th>
                        </tr>
                        <tr>
                            <td>PUS CELLS</td>
                            <td><?= $model->pus_cells  ?></td>
                            <th class="text-center">PARASITE</th>
                        </tr>
                        <tr>
                            <td>RED CELLS</td>
                            <td><?= $model->red_cells  ?></td>
                            <td rowspan="4">
                                <?= $model->parasite  ?>
                            </td>
                        </tr>
                        <tr>
                            <td>FAT GLOBULES</td>
                            <td><?= $model->fat_globules  ?></td>
                        </tr>
                        <tr>
                            <td>YEAST CELLS</td>
                            <td><?= $model->yeast_cells  ?></td>
                        </tr>
                        <tr>
                            <td>BACTERIA</td>
                            <td><?= $model->bateria  ?></td>
                        </tr>
                        <tr>
                            <td>STARCH GRANULES</td>
                            <td><?= $model->starch_granules  ?></td>
                            <th class="text-center">AMOEBA</th>
                        </tr>
                        <tr>
                            <td>MUSCLE FIBER</td>
                            <td><?= $model->muscle_fiber  ?></td>
                            <td rowspan="2">
                                <?= $model->amoeba  ?>
                            </td>
                        </tr>
                        <tr>
                            <td>VEGETABLE CELLS</td>
                            <td><?= $model->vegetable_cells  ?></td>
                        </tr>
                        <tr>
                            <td colspan="3"> &nbsp; </td>
                        </tr>
                        <tr>
                            <th colspan="3" class="text-center">OTHERS</th>
                        </tr>
                        <tr>
                            <td colspan="3" rowspan="2">
                            <?= $model->others  ?>
                            </td>
                        </tr>
                    </tbody>
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
