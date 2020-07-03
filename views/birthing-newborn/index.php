<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingNewbornSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->params['page'] = 'Birthing';
// $this->params['second'] = 'Order';
// $this->title = 'Birthing Newborn Baby';
// $this->params['breadcrumbs'][] = ['label' => 'Birthing', 'url' => ['/birthing']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = Html::a('Create Birthing Newborn Baby', ['create'], ['class' => 'btn btn-primary']);
?>
<!--<div class="birthing-index ibox float-e-margins ibox-content"> -->
 
   <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT</th>
                <!--<th>DATE / TIME DELIVERED</th>-->
                <!--<th>NAME</th>-->
                <!--<th>GENDER</th>-->
                <!--<th>DELIVERY TYPE</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_newborn'
            ])?>
        </tbody>
    </table>

<!--</div>-->
