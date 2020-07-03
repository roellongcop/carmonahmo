<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'About';
$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Information', ['create'], ['class' => 'btn btn-primary']);
?>
<div class="about-index ibox float-e-margins ibox-content">

    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>LEGEND</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_about'
            ])?>
        </tbody>
    </table>
   
</div>
