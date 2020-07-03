<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UrinalysisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

 
 
$this->params['page'] = 'Laboratory';
$this->params['second'] = 'Urinalysis';
$this->title = 'Urinalysis';
$this->params['breadcrumbs'][] = $this->title;
$template = Yii::$app->template;
// $this->params['create'] = 
?>
<div class="department-index ibox float-e-margins ibox-content">
    <?= $template->button('create<br><br>', '', '', ['title' => 'Create Urinalysis Record']) ?>
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
                'itemView' => '_urinalysis'
            ])?>
        </tbody>
    </table>

</div>
