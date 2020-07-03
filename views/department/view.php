<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->params['page'] = 'Departments';
$this->title = ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['/department']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-view ibox float-e-margins ibox-content">

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
                'label' => 'Incharge',
                'value' => ucwords($model->user->fullname)
            ],
            [
                'label' => 'Department Name',
                'value' => ucwords($model->name)
            ],
            'description:ntext',
            [
                'label' => 'Status',
                'value' => Yii::$app->params['status'][$model->status]
            ]
        ],
    ]) ?>

</div>
