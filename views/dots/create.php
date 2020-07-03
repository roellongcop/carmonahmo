<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dots */

$this->params['page'] = 'Tb';
$this->params['second'] = 'TbProgram';
$this->title = 'Create Dots';
$this->params['breadcrumbs'][] = ['label' => 'Dots', 'url' => ['/dots']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users
    ]) ?>

</div>

