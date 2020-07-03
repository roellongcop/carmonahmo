<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Urinalysis */

$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Urinalysis';
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Urinalysis', 'url' => ['/urinalysis']];
$this->params['breadcrumbs'][] = $this->title;
$template = Yii::$app->template;
?> 
<div class="department-create ibox float-e-margins ibox-content">
<?php foreach($model->urinalysis as $model): ?>
    <?= $template->button(['index', 'update', 'delete'], $model) ?>
    <?= $template->link([
        'title' => 'Print',
        'url' => ['urinalysis/print', 'id' => $model->id],
        'options' => ['class' => 'btn btn-success']
    ]) ?>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patient',
            'staff',
            'color',
            'reaction',
            'transparency',
            'specific_gravity',
            'albumin',
            'sugar',
            'ketone',
            'amorphus_urates',
            'amorphus_phosphates',
            'calcium_oxalates',
            'uric_acid',
            'triple_phosphates',
            'hyaline',
            'fine_granular',
            'coarse_granular',
            'wbc_casts',
            'rbc_casts',
            'waxy',
            'pus_cells',
            'red_blood_cells',
            'ephithelial_cells',
            'yeast_cells',
            'renal_ephithelial_cells',
            'mocous_threads',
            'bacteria:ntext',
            'pregnancy_test',
            'fdate',
            'path',
            'label',
        ],
    ]) ?>
    <hr>
<?php endforeach; ?>

</div>
