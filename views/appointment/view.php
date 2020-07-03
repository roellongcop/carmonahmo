<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->params['page'] = 'Appointments';
$this->title = $model->complaint->name;
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['/appointment']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-view  ibox float-e-margins ibox-content">

    <?php if(Yii::$app->user->identity->role->name == 'Patient' && $model->status == 0) : ?>


        <p>
            <?= Yii::$app->template->button(['index', 'update'], $model) ?>
            


            <?php $scheduled_date = explode("-", $model->scheduled_date) ?>


            <?php if (
                ($scheduled_date[0] == date('Y')) 
                && ($scheduled_date[1] == date('m')) 
                && (($scheduled_date[2] - date('d')) == 1)) : ?>

                <?= Html::a('Cancel', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            <?php endif ?>
        </p>


        <div class="alert alert-info">
            You can cancel your appointment one day before the set date.
        </div>

    <?php elseif(Yii::$app->user->identity->role->name != 'Patient') : ?>
         <h3>
            <?= Html::a('<i class="fa fa-user"></i> ' . ucwords($model->user->name), [
                'user/view', 'id' => $model->user_id
            ], ['title' => 'View Profile']) ?>
        </h3>
        <p>
            <?php if($model->status == 0) : ?>

            <?= Html::a('Cancel', ['appointment/cancel', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-cancel-doctor',
                'data-key' => $model->id
            ]) ?>
            <?= Html::a('Approved', '#', [
                'class' => 'btn btn-success btn-approved',
                'data-key' => $model->id
            ]) ?>

            <?php endif; ?>

            <?php if($model->status == 0 || $model->status == 1) : ?>
            <?= Html::a('Start Check up', ['medical/start-checkup', 'id' => $model->id], [
                'class' => 'btn btn-primary'
            ]) ?>
            <?php endif; ?>
        </p>
    <?php endif; ?>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Complaint',
                'value' => ucwords($model->complaint->name),
            ],
            [
                'label' => 'Schedule Date',
                'value' => date('F d, Y', strtotime($model->scheduled_date)),
            ],
            'description:ntext',
            [
                'label' => 'status',
                'value' => $model->label,
                'format' => 'raw'
            ]
        ],
    ]) ?>

</div>
