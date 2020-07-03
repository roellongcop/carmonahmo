<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WaterLab */
$this->params['page'] = 'Waterlab';
$this->title = ucwords($model->patientName);
$this->params['breadcrumbs'][] = ['label' => 'Water Laboratory', 'url' => ['/water-lab']];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="activity-index ibox float-e-margins ibox-content">

    <?= Yii::$app->template->button(['index', 'update', 'delete'], $model) ?>
    <?= Yii::$app->template->link([
        'title' => 'Print',
        'url' => ['water-lab/print', 'id' => $model->id],
        'options' => ['class' => 'btn btn-success']
    ]) ?>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patientName',
            'sampling_collected_by',
            'sampling_date_time',
            'specify_address_sampling_point:ntext',
            [
                'attribute' => 'sampling_point',
                'value' => $model->getSP()
            ],
            [
                'attribute' => 'source_of_water_supply',
                'value' => $model->getSWS()
            ],
            [
                'attribute' => 'type_of_ownership',
                'value' => $model->getTO()
            ],
            [
                'attribute' => 'type_of_well',
                'value' => $model->getTW()
            ],
            [
                'attribute' => 'well_usage',
                'value' => $model->getWU()
            ],
            [
                'attribute' => 'pump_required_priming',
                'value' => $model->getPRP()
            ],
            [
                'attribute' => 'repair_done_within_2_months',
                'value' => $model->getPDWM()
            ],

            [
                'attribute' => 'water_treated',
                'value' => $model->getWT()
            ],


           [
                'attribute' => 'distance_from_well_of_the_following_in_meter',
                'value' => $model->getDWFM()
            ],

           [
                'attribute' => 'analysis_requested',
                'value' => $model->getAR()
            ],


            'designation:ntext',
            'location_of_well:ntext',
            'received_by',
            'date_time',
            'labaratory_no',
            'parameters_to_be_examined:ntext',
           [
                'attribute' => 'result',
                'value' => ($model->result !== null)?Yii::$app->params['result'][$model->result]:'Not set'
            ],
            
        ],
    ]) ?>

</div>




