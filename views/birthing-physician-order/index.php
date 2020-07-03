<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingPhysicianOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->params['page'] = 'Birthing';
// $this->params['second'] = 'Order';
// $this->title = 'Birthing Physician Order';
// $this->params['breadcrumbs'][] = ['label' => 'Birthing', 'url' => ['/birthing']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = Html::a('Create Birthing Physician Order', ['create'], ['class' => 'btn btn-primary']);
?>
<!--<div class="birthing-index ibox float-e-margins ibox-content"> -->
 
    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT</th>
                <!--<th>DATE</th>-->
                <!--<th>PRESCRIPTION</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_order'
            ])?>
        </tbody>
    </table>

<!--</div>-->
