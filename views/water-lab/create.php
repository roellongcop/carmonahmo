<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WaterLab */
$this->params['page'] = 'Waterlab';
$this->title = 'Create Water Lab';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['/water-lab']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index ibox float-e-margins ibox-content">


    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users
    ]) ?>

</div>
