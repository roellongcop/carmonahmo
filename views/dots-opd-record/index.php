<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DotsTbTreatmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Tb';
$this->params['second'] = 'opd';
$this->title = 'OPD Record';
$this->params['breadcrumbs'][] = ['label' => 'Tb Dots', 'url' => ['/dots']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="birthing-index ibox float-e-margins ibox-content">

   

    <table class="table table-bordered data">
        <thead>
            <tr>
              <th>Patient Name</th>
            <th>date</th>
            <th>BP</th>
            <th>WT</th>
            <th>PR</th>
  
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_opd-record'
            ])?>
        </tbody>
    </table>
</div>

