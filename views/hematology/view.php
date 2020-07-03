<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hematology */
 
$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Hematology';
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Hematology', 'url' => ['/hematology']];
$this->params['breadcrumbs'][] = $this->title;
$template = Yii::$app->template;
?> 
<div class="department-create ibox float-e-margins ibox-content">
<?php foreach($model->hematology as $model): ?>
    <?= $template->button(['index', 'update', 'delete'], $model) ?>
    <?= $template->link([
        'title' => 'Print',
        'url' => ['hematology/print', 'id' => $model->id],
        'options' => ['class' => 'btn btn-success']
    ]) ?>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patient',
            'staff',
            'hemoglobin',
            'hematocrit',
            'leokocyte',
            'erythrocyte',
            'reticulocyte',
            'platelet',
            'esr',
            'bleeding_time',
            'clotting_time',
            'bands',
            'segmenters',
            'eosinophil',
            'basophil',
            'lymphocytes',
            'monocytes',
            'nucleated_rbc',
            'malarial_smear',
            'toxic_granulation:ntext',
            'blood_rh_type:ntext',
            'others:ntext',
            'fdate',
            'path',
            'label',
        ],
    ]) ?>
<hr>
<?php endforeach; ?>
</div>
