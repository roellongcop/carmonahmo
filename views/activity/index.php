<?php

use yii\helpers\Html;
use yii\widgets\ListView;

$heads = ['activity', 'description', 'day', 'time', 'status'];


/* @var $this yii\web\View */
/* @var $searchModel app\models\ActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Activities';
$this->title = 'Activities';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Activity', ['create'], ['class' => 'btn btn-primary']);
?>
<div class="activity-index ibox float-e-margins ibox-content">
    
    <table class="table table-bordered data">
        <thead>
            <tr>
                <?php foreach ($heads as $th) : ?>
                    <?= '<th>' . strtoupper($th) . '</th>'; ?>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_activity'
            ])?>
        </tbody>
    </table>
</div>
