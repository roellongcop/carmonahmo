<?php

use yii\helpers\Html;
use yii\widgets\ListView;


$this->params['page'] = 'Fecalysis';
$this->params['second'] = 'Laboratory Records';
$this->title = 'Laboratory Records';
$this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = 
$template = Yii::$app->template;
?>
<div class="department-index ibox float-e-margins ibox-content">
    <ul class="nav nav-tabs">
        <?php if($template->user_can('index', 'fecalysis')): ?>
            <li class="active"><a data-toggle="tab" href="#f">Fecalysis</a></li>
        <?php endif ?>

        <?php if($template->user_can('index', 'hematology')): ?>
            <li><a data-toggle="tab" href="#h">Hematology</a></li>
        <?php endif ?>

        <?php if($template->user_can('index', 'urinalysis')): ?>
            <li><a data-toggle="tab" href="#u">Urinalysis</a></li>  
        <?php endif ?>

    </ul>
    <div class="tab-content">
        <?php if($template->user_can('index', 'fecalysis')): ?>
            <div id="f" class="tab-pane fade in active"> <br> 
                <table class="table table-bordered data">
                    <thead>
                        <tr>
                            <!--<th>DATE</th>-->
                            <th>PATIENT</th>
                            <!--<th>REQUESTED BY</th>-->
                            <!--<th>STATUS</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?= ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '_fecalysis'
                        ])?>
                    </tbody>
                </table>
            </div>
        <?php endif ?>
        <?php if($template->user_can('index', 'hematology')): ?>
            <div id="h" class="tab-pane fade in"> <br>
                <?= $this->render('/hematology/index', [
                    'dataProvider' => $dataProviderHematology
                ]) ?> 
            </div>
        <?php endif ?>
        <?php if($template->user_can('index', 'urinalysis')): ?>
            <div id="u" class="tab-pane fade in"> <br> 
                <?= $this->render('/urinalysis/index', [
                    'dataProvider' => $dataProviderUrinalysis
                ]) ?>
            </div>
        <?php endif ?>
    </div>
</div>
