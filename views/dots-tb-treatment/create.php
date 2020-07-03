<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DotsTbTreatment */
$this->params['page'] = 'Tb';
$this->params['second'] = 'ipt';
$this->title = 'Create Dots Tb Treatment';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->dots->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index ibox float-e-margins ibox-content"> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
