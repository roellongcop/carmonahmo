<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BirthingIntravenousFluid */

$this->params['page'] = 'Birthing';
$this->title = $model->patient;
// $this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['birthing/monitoring', 'id' => $model->birthing->id]];
$this->params['breadcrumbs'][] = ['label' => 'Birthing Intravenous Fluid'];
?>
<div class="birthing-index ibox float-e-margins ibox-content"> 
    <?php #foreach($model->birthing as $record): ?>
        <?php #foreach($record->intravenous as $model): ?>
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
                    'bag_no',
                    'solution',
                    'blood',
                    'startTime',
                    'endTime',
                    'remarks:ntext',
                    'label',
                ],
            ]) ?>
        <hr>
        <?php #endforeach; ?>
    <?php #endforeach; ?>

</div>
