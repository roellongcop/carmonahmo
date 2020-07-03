<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Birthing';
$this->params['second'] = 'Program';
$this->title = 'Birthing Program';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Birthing', ['create'], ['class' => 'btn btn-primary']);
$template = Yii::$app->template;
?>
<div class="birthing-index ibox float-e-margins ibox-content">

   <ul class="nav nav-tabs">
        <?php if($template->user_can('index', 'birthing')): ?>
            <li class="active"><a data-toggle="tab" href="#bp">Birthing Program</a></li>
        <?php endif ?>


        <?php if($template->user_can('index', 'birthing-assessment')): ?>
            <li><a data-toggle="tab" href="#a">Assessment</a></li>
        <?php endif ?>

        <?php if($template->user_can('index', 'birthing-intravenous-fluid')): ?>
            <li><a data-toggle="tab" href="#if">Intravenous Fluid</a></li> 
        <?php endif ?>

        <?php if($template->user_can('index', 'birthing-monitoring-sheet')): ?>
            <li><a data-toggle="tab" href="#ms">Monitoring Sheet</a></li> 
        <?php endif ?>

        <?php if($template->user_can('index', 'birthing-weight-progress')): ?>
            <li><a data-toggle="tab" href="#wp">Weight Progress</a></li> 
        <?php endif ?>

        <?php if($template->user_can('index', 'birthing-physician-order')): ?>
            <li><a data-toggle="tab" href="#po">Physician Order</a></li>
        <?php endif ?>

        <?php if($template->user_can('index', 'birthing-newborn')): ?>
            <li><a data-toggle="tab" href="#nb">Newborn Baby</a></li>
        <?php endif ?>

    </ul>

    <div class="tab-content">
        <?php if($template->user_can('index', 'birthing')): ?>
            <div id="bp" class="tab-pane fade in active"> <br> 
               
                <table class="table table-bordered data">
                    <thead>
                        <tr>
                            <th>PATIENT NAME</th>
                            <!--<th>COMPLAINT</th>-->
                            <!--<th>START OF PREGNANCY</th>-->
                            <!--<th>EXPECTED DELIVERY</th>-->
                            <!--<th>STATUS</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?= ListView::widget([
                            'dataProvider' => $dataProviderBirthing,
                            'itemView' => '_birthing'
                        ])?>
                    </tbody>
                </table>
            </div>
        <?php endif ?>
        
        <?php if($template->user_can('index', 'birthing-assessment')): ?>
            <div id="a" class="tab-pane fade in"> <br>
                <?= $this->render('/birthing-assessment/index', [
                    'dataProvider' => $dataProviderBirthingAssessment
                ]) ?>
            </div>
        <?php endif ?>

        <?php if($template->user_can('index', 'birthing-intravenous-fluid')): ?>
            <div id="if" class="tab-pane fade in"> <br>
                <?= $this->render('/birthing-intravenous-fluid/index', [
                    'dataProvider' => $dataProviderBirthingIntravenousFluid
                ]) ?>
            </div>
        <?php endif ?>
        
        <?php if($template->user_can('index', 'birthing-monitoring-sheet')): ?>
            <div id="ms" class="tab-pane fade in"> <br>
                <?= $this->render('/birthing-monitoring-sheet/index', [
                    'dataProvider' => $dataProviderBirthingMonitoringSheet
                ]) ?>
            </div>
        <?php endif ?>
        
        <?php if($template->user_can('index', 'birthing-weight-progress')): ?>
            <div id="wp" class="tab-pane fade in"> <br>
                <?= $this->render('/birthing-weight-progress/index', [
                    'dataProvider' => $dataProviderBirthingWeightProgress
                ]) ?>
            </div>
        <?php endif ?>
        
        <?php if($template->user_can('index', 'birthing-physician-order')): ?>
            <div id="po" class="tab-pane fade in"> <br>
                <?= $this->render('/birthing-physician-order/index', [
                    'dataProvider' => $dataProviderBirthingPhysicianOrder
                ]) ?>
            </div>
        <?php endif ?>
        
        <?php if($template->user_can('index', 'birthing-newborn')): ?>
            <div id="nb" class="tab-pane fade in"> <br>
                <?= $this->render('/birthing-newborn/index', [
                    'dataProvider' => $dataProviderBirthingNewborn
                ]) ?>
            </div>
        <?php endif ?>
    </div>

    
</div>
