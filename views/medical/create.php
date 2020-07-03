<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Medical */

$this->params['page'] = 'Medical';
$this->title = 'Create Medical Checkups';
$this->params['breadcrumbs'][] = ['label' => 'Checkups', 'url' => ['/medical']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'patients' => $patients
    ]) ?>

</div>
