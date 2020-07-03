<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Departments';
$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Department', ['create'], ['class' => 'btn btn-primary']);
?>
<div class="department-index ibox float-e-margins ibox-content">

    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>INCHARGE</th>
                <th>DEPARTMENT NAME</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_department'
            ])?>
        </tbody>
    </table>
</div>
