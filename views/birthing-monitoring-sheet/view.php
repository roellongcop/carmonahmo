<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingMonitoringSheet */

$this->params['page'] = 'Birthing';
$this->title = $model->patient;
// $this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['birthing/monitoring', 'id' => $model->birthing->id]];
$this->params['breadcrumbs'][] = ['label' => 'Birthing Monitoring Sheet'];
?>
<div class="birthing-index ibox float-e-margins ibox-content"> 
    <?php #foreach($model->birthing as $record): ?>
        <?php #foreach($record->sheet as $model): ?>
            <?= Yii::$app->template->link([
                'title' => 'Back',
                'url' => ['birthing/monitoring', 'id' => $model->birthing->id],
                'options' => ['class' => 'btn btn-white']
            ]) ?>
            <?= Yii::$app->template->button(['update', 'delete'], $model) ?>
        
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'patient',
                    'fdate',
                    'blood_pressure',
                    'pulse',
                    'respiration',
                    'urine_output',
                    'cvp_level',
                    'others:ntext',
                    'label',
                ],
            ]) ?>
        <hr>
        <?php #endforeach; ?>
    <?php #endforeach; ?>

</div>
