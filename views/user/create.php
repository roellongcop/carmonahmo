<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->params['page'] = 'Users';
$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['/user']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create ibox float-e-margins ibox-content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
