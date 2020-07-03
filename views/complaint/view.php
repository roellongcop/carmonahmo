<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Complaint */

$this->params['page'] = 'Complaints';
$this->title = ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Complaints', 'url' => ['/complaint']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="complaint-view ibox float-e-margins ibox-content">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Complaint',
                'value' => ucwords($model->name)
            ],
            [
                'label' => 'Description',
                'value' => ucfirst($model->description)
            ],
            [
                'label' => 'Departments Cater this Complaint',
                'value' => $model->departmentList,
                'format' => 'raw'
            ],
            [
                'label' => 'Status',
                'value' => Yii::$app->params['status'][$model->status]
            ]
        ],
    ]) ?>

</div>
