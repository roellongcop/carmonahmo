<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Activity */

$this->params['page'] = 'Activities';
$this->title = 'Create Activity';
$this->params['breadcrumbs'][] = ['label' => 'Activities', 'url' => ['/activity']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
