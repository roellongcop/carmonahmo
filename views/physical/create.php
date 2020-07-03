<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Physical */

$this->params['page'] = 'Physical';
$this->title = 'Create Physical';
$this->params['breadcrumbs'][] = ['label' => 'Physical', 'url' => ['/physical']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients,
    ]) ?>

</div>
