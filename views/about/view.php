<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->params['page'] = 'About';
$this->title = $model->legend;
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-view ibox float-e-margins ibox-content">
    <?= Yii::$app->template->button(['index', 'update', 'delete'], $model) ?>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'legend',
            'detail:raw',
            [
                'label' => 'Status',
                'value' => Yii::$app->params['status'][$model->status]
            ]
        ],
    ]) ?>

</div>
