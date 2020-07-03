<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = ucwords(Yii::$app->user->identity->username);
$this->params['breadcrumbs'][] =  ['label' => 'Profile', 'url' => ['view', 'id' => Yii::$app->user->identity->id]];
$this->params['breadcrumbs'][] = ['label' => $this->title];
$this->params['page'] = 'Profile';
?>
<div class="user-view ibox float-e-margins ibox-content">

    <h1><?= Html::encode('Profile') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            ['label' => 'Password', 'value' => '********'],
            ['label' => 'UserType', 'value' => $model->user],
        ],
    ]) ?>

</div>
