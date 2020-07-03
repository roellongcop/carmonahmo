<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Dental';
$this->title = 'Dental';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Dental Record', ['create'], ['class' => 'btn btn-primary']);
?>

<div class="activity-index ibox float-e-margins ibox-content">


    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT NAME</th>
                <!--<th>COMPLAINT</th>-->
                <!--<th>DIAGNOSIS</th>-->
                <!--<th>TREATMENT</th>-->
                <!--<th>STATUS</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_dental'
            ])?>
        </tbody>
    </table>
</div>
