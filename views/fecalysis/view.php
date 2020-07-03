<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fecalysis */

$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Fecalysis';
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fecalysis', 'url' => ['/fecalysis']];
$this->params['breadcrumbs'][] = $this->title;
$template = Yii::$app->template;
?> 
<div class="department-create ibox float-e-margins ibox-content">
<?php foreach($model->fecalysis as $model): ?>
    <?= $template->button(['index', 'update', 'delete'], $model) ?>
    <?= $template->link([
        'title' => 'Print',
        'url' => ['fecalysis/print', 'id' => $model->id],
        'options' => ['class' => 'btn btn-success']
    ]) ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'patient',
            'staff',
            'color',
            'consistency',
            'pus_cells',
            'red_cells',
            'fat_globules',
            'yeast_cells',
            'bateria',
            'starch_granules',
            'muscle_fiber',
            'vegetable_cells',
            'parasite:ntext',
            'amoeba:ntext',
            'others:ntext',
            'fdate',
            'path',
            'label',
        ],
    ]) ?>

    <hr>
<?php endforeach; ?>

</div>
