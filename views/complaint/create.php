<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Complaint */

$this->params['page'] = 'Complaints';
$this->title = 'Create Complaint';
$this->params['breadcrumbs'][] = ['label' => 'Complaints', 'url' => ['/complaint']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="complaint-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'departments' => $departments,
    ]) ?>

</div>
