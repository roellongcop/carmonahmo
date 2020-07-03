<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->params['page'] = 'About';
$this->title = 'Create About';
$this->params['breadcrumbs'][] = ['label' => 'About Us', 'url' => ['/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create ibox float-e-margins ibox-content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
