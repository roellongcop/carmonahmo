<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingAssessmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->params['page'] = 'Birthing';
// $this->params['second'] = 'Checkups';
// $this->title = 'Birthing Assessments';
// $this->params['breadcrumbs'][] = ['label' => 'Birthing', 'url' => ['/birthing']];
// $this->params['breadcrumbs'][] = $this->title;
// $this->params['create'] = Html::a('Create Birthing Assessment', ['create'], ['class' => 'btn btn-primary']);
?>
<!--<div class="birthing-index ibox float-e-margins ibox-content"> -->
 
    <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT</th>
                <!--<th>DATE</th>-->
                <!--<th>COMPLAINT</th>-->
                <!--<th>ASSESSMENT</th>-->
                <!--<th>INTERVENTION</th>-->
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_assessment'
            ])?>
        </tbody>
    </table>
<!--</div>-->
