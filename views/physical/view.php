<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Physical */

$this->params['page'] = 'Physical';
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Physical', 'url' => ['/physical']];
$this->params['breadcrumbs'][] = $this->title;
$template = Yii::$app->template;
?>
<div class="department-index ibox float-e-margins ibox-content">
   
    <?php foreach($model->physical as $model): ?>

        <?= $template->button(['index', 'update', 'delete'], $model) ?>
        <?= $template->link([
            'title' => 'Print',
            'url' => ['physical/print', 'id' => $model->id],
            'options' => ['class' => 'btn btn-primary']
        ]) ?>
    
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'patient',
                'dateTime',
                'occupation',
                'diagnosis:ntext',
                'bp',
                'pr',
                'rr',
                'temp',
                'wt',
                'label',
            ],
        ]) ?>
        <hr>
    <?php endforeach; ?>
</div>
