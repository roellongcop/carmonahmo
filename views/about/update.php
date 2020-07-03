<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->params['page'] = 'About';
$this->title = 'Update About: ' . $model->legend;
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['/about']];
$this->params['breadcrumbs'][] = ['label' => $model->legend, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-update ibox float-e-margins ibox-content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
