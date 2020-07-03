<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HematologySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Hematology';
$this->title = 'Hematologies';
$this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = 
$template = Yii::$app->template;
?>
<div class="department-index ibox float-e-margins ibox-content">

    <?= $template->button('create<br><br>', '', '', ['title' => 'Create Hematology Record']) ?>


    <table class="table table-bordered data">
        <thead>
            <tr>
                <!--<th>DATE</th>-->
                <th>PATIENT</th>
                <!--<th>REQUESTED BY</th>-->
                <!--<th>STATUS</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_hematology'
            ])?>
        </tbody>
    </table>

</div>
