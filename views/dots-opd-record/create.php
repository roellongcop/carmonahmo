<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DotsOpdRecord */
$this->params['page'] = 'Tb';
$this->params['second'] = 'opd';
$this->title = 'Create Dots Opd Record';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->dots->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="birthing-index ibox float-e-margins ibox-content"> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
