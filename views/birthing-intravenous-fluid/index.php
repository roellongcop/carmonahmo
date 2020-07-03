<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingIntravenousFluidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->params['page'] = 'Birthing';
// $this->params['second'] = 'Intravenous';
// $this->title = 'Birthing Intravenous Fluid';
// $this->params['breadcrumbs'][] = ['label' => 'Birthing', 'url' => ['/birthing']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = Html::a('Create Birthing Intravenous Fluid', ['create'], ['class' => 'btn btn-primary']);
?>
<!--<div class="birthing-index ibox float-e-margins ibox-content"> -->
 

    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT</th>
                <!--<th>DATE</th>-->
                <!--<th>BAG NO</th>-->
                <!--<th>SOLUTION</th>-->
                <!--<th>BLOOD</th>-->
                <!--<th>TIME START</th>-->
                <!--<th>TIME END</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_fluid'
            ])?>
        </tbody>
    </table>

<!--</div>-->
