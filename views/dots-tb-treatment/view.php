<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DotsTbTreatment */

$this->params['page'] = 'Tb';
$this->params['second'] = 'ipt';
$this->title = $model->dots->PatientName;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->dots->id]];
$this->params['breadcrumbs'][] = ['label' => ' Tb Treatment/IPT card'];
?>

<style type="text/css">
.border{
  border:1px solid;
      display: flex;
}
.border-col{
    padding: 5px;
    border-left: 1px solid;
    /* border-right: 1px solid; */
}
</style>

<div class="activity-index ibox float-e-margins ibox-content"> 


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

            'tb_case_number',
            'region:ntext',
            'name_of_dots_facility:ntext',
            [
                'label' => 'bcg Scar', 
                'value' => Yii::$app->params['bcg_scar'][$model->bcg_scar]
            ],
            'patientDetail',
            // 'diagnostic:raw',
            [
                'label' => 'diagnosis', 
                'value' => Yii::$app->params['diagnosis'][$model->diagnosis]
            ],
            [
                'label' => 'history_of_anti_tb_drug_intake', 
                'value' => Yii::$app->params['history_of_anti_tb_drug_intake'][$model->history_of_anti_tb_drug_intake]
            ],
            [
                'label' => 'bacteriological_status', 
                'value' => Yii::$app->params['bacteriological_status'][$model->bacteriological_status]
            ],
            [
                'label' => 'classification_of_tb_disease', 
                'value' => Yii::$app->params['classification_of_tb_disease'][$model->classification_of_tb_disease]
            ],
            [
                'label' => 'registeration_group', 
                'value' => Yii::$app->params['registeration_group'][$model->registeration_group]
            ],
            'treatment_started:ntext',
            [
                'label' => 'treatment_outcome', 
                'value' => Yii::$app->params['registeration_group'][$model->treatment_outcome]
            ],
            // 'clinical',
            // 'dosage',
        ],
    ]) ?>

</div>



