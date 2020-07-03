<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Birthing */

$this->params['page'] = 'Birthing'; 
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Birthings', 'url' => ['/birthing']]; 
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="birthing-view ibox float-e-margins ibox-content">
    
    <?php foreach($model->birthing as $model): ?>
        <p>
            <?= Yii::$app->template->button(['index', 'update'], $model) ?>
            <?= Yii::$app->template->link([
                'title' => 'Monitoring Sheet',
                'url' => ['birthing/monitoring', 'id' => $model->id],
                'options' => ['class' => 'btn btn-info']
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'patient',
                'chief_complaint:ntext',
                [
                    'label' => 'Date of Pregnancy',
                    'value' => date('F d, Y', strtotime($model->start_of_pregnancy))
                ],
                [
                    'label' => 'Date of Pregnancy',
                    'value' => date('F d, Y', strtotime($model->end_of_pregnancy))
                ],
                [
                    'label' => 'Guardian Name',
                    'value' => ucwords($model->guardian_name)
                ],
                [
                    'label' => 'Guardian Civil Status',
                    'value' => Yii::$app->params['civil_status'][$model->guardian_civil_status]
                ],
                [
                    'label' => 'Guardian Gender',
                    'value' => Yii::$app->params['gender'][$model->guardian_civil_status]
                ],
                'guardian_contact',
                'guardian_age',

                [
                    'label' => 'Relationship',
                    'value' => Yii::$app->params['relationship'][$model->guardian_relationship]
                ],

                'guardian_address:ntext',

                [
                    'label' => 'Date Added',
                    'value' => date('F d, Y H:i:s A', strtotime($model->date_added))
                ],

                [
                    'label' => 'Status',
                    'value' => Yii::$app->params['status'][$model->status]
                ],
            ],
        ]) ?>
        <hr>
    <?php endforeach; ?>
</div>
