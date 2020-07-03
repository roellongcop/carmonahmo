<?php

use yii\helpers\Html;
use yii\widgets\ListView;


$this->params['page'] = 'Physical';
$this->title = 'Physical';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Physical Record', ['create'], ['class' => 'btn btn-primary']);
?>
<div class="department-index ibox float-e-margins ibox-content">

    <table class="table table-bordered data">
        <thead>
            <tr>
                <!--<th>DATE | TIME</th>-->
                <th>PATIENT</th>
                <!--<th>DIAGNOSIS</th>-->
                <!--<th>STATUS</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_physical'
            ])?>
        </tbody>
    </table>
</div>
