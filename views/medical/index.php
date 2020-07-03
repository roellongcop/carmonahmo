<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Medical';
$this->title = 'Medical Checkups';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Medical Checkups', ['create'], ['class' => 'btn btn-primary']);
?>
<div class="department-index ibox float-e-margins ibox-content">

    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT</th>
                <!--<th>DATE </th>-->
                <!--<th>COMPLAINT</th>-->
                <!--<th>STATUS</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_medical'
            ])?>
        </tbody>
    </table>
</div>
