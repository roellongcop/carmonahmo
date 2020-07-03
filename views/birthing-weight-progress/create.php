<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BirthingWeightProgress */

$this->params['page'] = 'Birthing';
$this->title = 'Create Birthing Weight Progress';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['birthing/monitoring', 'id' => $model->birthing->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="birthing-index ibox float-e-margins ibox-content"> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
