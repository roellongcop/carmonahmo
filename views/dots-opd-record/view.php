<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DotsOpdRecord */

$this->params['page'] = 'Tb';
$this->params['second'] = 'opd';
$this->title = $model->dots->PatientName;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->dots->id]];
$this->params['breadcrumbs'][] = ['label' => ' OPD Record'];
?>
<div class="birthing-index ibox float-e-margins ibox-content">

    <?php if (Yii::$app->user->identity->role->name != 'Patient') : ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
             <?= Html::a('Print', ['print', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        </p>
    <?php else : ?>
        <p>
            <?= Html::a('Back', ['dots/monitoring', 'id' => $model->dots->id], ['class' => 'btn btn-white']) ?>
        </p>
    <?php endif; ?>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'date',
            'bp',
            'wt',
            'pr',
            'rr',
            't',
            'S:ntext',
            'O:ntext',
            'A:ntext',
            'P:ntext',
            'smoking',
        ],
    ]) ?>

</div>
