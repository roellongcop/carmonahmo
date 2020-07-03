<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Medical */

$this->params['page'] = 'Medical';
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Checkups', 'url' => ['/medical']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-view ibox float-e-margins ibox-content">
    <?php foreach($model->medical as $model): ?>
        <?= Yii::$app->template->button(['index', 'update', 'delete'], $model) ?>
        <?= Yii::$app->template->link([
            'title' => 'Medical Certificate',
            'url' => ['medical/print', 'id' => $model->id],
            'options' => ['class' => 'btn btn-info']
        ]) ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patientName',
            'fdate',
            'chief_complaint:ntext',
            'primary_diagnosis',
            'clinical_history:ntext',
            'other_diagnosis:ntext',
            'treatment:ntext',
            'addedOn',
            'label',
        ],
    ]) ?>
    <hr>
<?php endforeach; ?>
</div>
