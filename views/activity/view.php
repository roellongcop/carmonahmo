<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */

$this->params['page'] = 'Activities';
$this->title = ucwords($model->name);
$this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['/activity']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-view ibox float-e-margins ibox-content">
    <?= Yii::$app->template->button(['index', 'update', 'delete'], $model) ?>
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'description:ntext',
            'day',
            'time',
            [
                'label' => 'Status',
                'value' => Yii::$app->params['status'][$model->status]
            ]
        ],
    ]) ?>

</div>
