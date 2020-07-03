<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppointmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Appointments';
$this->title = 'APPOINTMENT/S';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Book Appointment', ['create'], ['class' => 'btn btn-primary']);
$this->params['can_access'] = true;
?>
<div class="appointment-index ibox float-e-margins ibox-content">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#all">All</a></li>
        <li><a data-toggle="tab" href="#pending">Pending</a></li>
        <li><a data-toggle="tab" href="#approved">Approved</a></li>
        <li><a data-toggle="tab" href="#rejected">Rejected</a></li>
        <li><a data-toggle="tab" href="#finished">Finished</a></li>
    </ul>

    <div class="tab-content">
        <div id="all" class="tab-pane fade in active"> <br>
            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <?= Yii::$app->user->identity->role->name != 'Patient' ? 
                        '<th>PATIENT</th>' : '' ?>
                        <th>COMPLAINT</th>
                        <th>SCHEDULED DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_appointment'
                    ])?>
                </tbody>
            </table>
        </div>

        <div id="pending" class="tab-pane fade"> <br>
            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <?= Yii::$app->user->identity->role->name != 'Patient' ? 
                        '<th>PATIENT</th>' : '' ?>
                        <th>COMPLAINT</th>
                        <th>SCHEDULED DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_pending'
                    ])?>
                </tbody>
            </table>
        </div>
        <div id="approved" class="tab-pane fade"> <br>
            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <?= Yii::$app->user->identity->role->name != 'Patient' ? 
                        '<th>PATIENT</th>' : '' ?>
                        <th>COMPLAINT</th>
                        <th>SCHEDULED DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_approved'
                    ])?>
                </tbody>
            </table>
        </div>
        <div id="rejected" class="tab-pane fade"> <br>
            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <?= Yii::$app->user->identity->role->name != 'Patient' ? 
                        '<th>PATIENT</th>' : '' ?>
                        <th>COMPLAINT</th>
                        <th>SCHEDULED DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_rejected'
                    ])?>
                </tbody>
            </table>
        </div>
         <div id="finished" class="tab-pane fade"> <br>
            <table class="table table-bordered data">
                <thead>
                    <tr>
                        <?= Yii::$app->user->identity->role->name != 'Patient' ? 
                        '<th>PATIENT</th>' : '' ?>
                        <th>COMPLAINT</th>
                        <th>SCHEDULED DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_finished'
                    ])?>
                </tbody>
            </table>
        </div>
    </div>

    
    
</div>



