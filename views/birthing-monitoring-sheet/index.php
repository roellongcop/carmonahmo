<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingMonitoringSheetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->params['page'] = 'Birthing';
// $this->params['second'] = 'Sheet';
// $this->title = 'Birthing Monitoring Sheet';
// $this->params['breadcrumbs'][] = ['label' => 'Birthing', 'url' => ['/birthing']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = Html::a('Create Birthing Monitoring Sheet', ['create'], ['class' => 'btn btn-primary']);
?>
<!--<div class="birthing-index ibox float-e-margins ibox-content"> -->
 

    
    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT</th>
                <!--<th>DATE</th>-->
                <!--<th>BLOOD PRESSURE</th>-->
                <!--<th>PULSE</th>-->
                <!--<th>RESPIRATION</th>-->
                <!--<th>URINE OUTPUT</th>-->
                <!--<th>CVP LEVEL</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_sheet'
            ])?>
        </tbody>
    </table>

<!--</div>-->
