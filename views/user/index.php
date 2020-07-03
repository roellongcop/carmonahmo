<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Users';
$this->title = 'Users';
$this->params['create'] = Html::a('Create User', ['create'], ['class' => 'btn btn-primary']);
$this->params['breadcrumbs'][] = $this->title;

$roles = \app\models\RoleSearch::dropdown(FALSE);
?>
<div class="user-index ibox float-e-margins ibox-content">

    <ul class="nav nav-tabs">
        <?php foreach ($roles as $key => $role) : ?>
            <li class="<?= $key == 0 ? 'active': '' ?>"><a data-toggle="tab" href="#role_<?= $role->id ?>"><?= $role->name ?></a></li>
        <?php endforeach ?>

    </ul>

    <div class="tab-content">
        <?php foreach ($roles as $key => $role) : ?>
        <div id="role_<?= $role->id ?>" class="tab-pane fade in <?= $key == 0 ? 'active': '' ?>"> <br>
            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <th>FULLNAME</th>
                        <th>USERNAME</th>
                        <th>GENDER</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $searchModel->user_type = $role->id; ?>
                    <?= ListView::widget([
                        'dataProvider' => $searchModel->search(Yii::$app->request->queryParams),
                        'itemView' => '_user'
                    ])?>
                </tbody>
            </table>
        </div>
        <?php endforeach ?>

        
        
    </div>
</div>
