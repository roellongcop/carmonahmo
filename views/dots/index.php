<?php


use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DotsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->params['page'] = 'Tb';
$this->params['second'] = 'TbProgram';
$this->title = 'DOTS (TB)';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Dots Record', ['create'], ['class' => 'btn btn-primary']);
?>
<div class="activity-index ibox float-e-margins ibox-content">


    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT NAME</th>
                <!--<th>DATE OF REQUESTED</th>-->
                <!--<th>NAME OF COLLECTION UNIT</th>-->
                <!--<th>AGE</th>-->
                <!--<th>TELEPHONE NUMBER</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_dots'
            ])?>
        </tbody>
    </table>
</div>
