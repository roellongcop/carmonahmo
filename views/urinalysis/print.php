<?php

use yii\helpers\Html;

$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Urinalysis';
$this->title = $model->patient;
$this->params['breadcrumbs'][] = ['label' => 'Urinalysis', 'url' => ['/urinalysis']];
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
            'title' => 'URINALYSIS',
            'model' => $model
        ]) ;?>
        
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center" colspan="2">HEAD</th>
                        <th class="text-center" colspan="2">CHEMICAL</th>
                    </tr>
                    <tr>
                        <td> COLOR </td>
                        <td> <?= $model->color ?> </td>
                        <td> ALBUMIN </td>
                        <td> <?= $model->albumin ?> </td>
                    </tr>

                    <tr>
                        <td> REACTION </td>
                        <td> <?= $model->reaction ?> </td>
                        <td> SUGAR </td>
                        <td> <?= $model->sugar ?> </td>
                    </tr>

                    <tr>
                        <td> TRANSPARENCY </td>
                        <td> <?= $model->transparency ?> </td>
                        <td> KETONE </td>
                        <td> <?= $model->ketone ?> </td>
                    </tr>
                    
                    <tr>
                        <td> SPECIFIC GRAVITY </td>
                        <td> <?= $model->specific_gravity ?> </td>
                        <td>  </td>
                        <td>  </td>
                    </tr>
                    <tr>
                        <th class="text-center" colspan="4">
                            MICROSCOPIC
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">CRYSTALS</th>
                        <th colspan="2">CELLS</th>
                    </tr>

                    <tr>
                        <td> Amorphous urates </td>
                        <td> <?= $model->amorphus_urates ?> </td>
                        <td> Pus cells </td>
                        <td> <?= $model->pus_cells ?> </td>
                    </tr>

                    <tr>
                        <td> Amorphous phosphates </td>
                        <td> <?= $model->amorphus_phosphates ?> </td>
                        <td> Red blood cells </td>
                        <td> <?= $model->red_blood_cells ?> </td>
                    </tr>

                    <tr>
                        <td> Calcium oxalates </td>
                        <td> <?= $model->calcium_oxalates ?> </td>
                        <td> Epithelial cells </td>
                        <td> <?= $model->ephithelial_cells ?> </td>
                    </tr>

                    <tr>
                        <td> Uric acid </td>
                        <td> <?= $model->uric_acid ?> </td>
                        <td> Yeast cells </td>
                        <td> <?= $model->yeast_cells ?> </td>
                    </tr>

                    <tr>
                        <td> Triple phosphates </td>
                        <td> <?= $model->triple_phosphates ?> </td>
                        <td> Renal epithelial cells </td>
                        <td> <?= $model->renal_ephithelial_cells ?> </td>
                    </tr>

                    <tr>
                        <th colspan="2">CASTS</th>
                        <th colspan="2">OTHERS</th>
                    </tr>

                    <tr>
                        <td> Hyaline </td>
                        <td> <?= $model->hyaline ?> </td>
                        <td> Mucous threads </td>
                        <td> <?= $model->mocous_threads ?> </td>
                    </tr>

                    <tr>
                        <td> Fine Granular </td>
                        <td> <?= $model->fine_granular ?> </td>
                        <td> Bacteria </td>
                        <td> <?= $model->bacteria ?> </td>
                    </tr>

                    <tr>
                        <td> Coarse Granular </td>
                        <td> <?= $model->coarse_granular ?> </td>
                        <td>  </td>
                        <td>  </td>
                    </tr>

                    <tr>
                        <td> WBC Casts </td>
                        <td> <?= $model->wbc_casts ?> </td>
                        <td>  </td>
                        <td>  </td>
                    </tr>

                    <tr>
                        <td> RBC Casts </td>
                        <td> <?= $model->rbc_casts ?> </td>
                        <th colspan="2">PREGNANCY TEST</th>
                    </tr>

                    <tr>
                        <td> Waxy </td>
                        <td> <?= $model->waxy ?> </td>
                        <td colspan="2">  
                            <?= $model->pregnancy_test ?>
                        </td> 
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
