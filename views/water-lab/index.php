
<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Waterlab';
$this->title = 'Water Laboratory';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Create Water Laboratory Record', ['create'], ['class' => 'btn btn-primary']);



   
?>

<div class="department-index ibox float-e-margins ibox-content">
    
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab-1">All Records</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-2">Passed</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-3">Failed</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-4">Undefined Result</a>
        </li>
    </ul>


      <div class="tab-content">
        <div id="tab-1" class="tab-pane fade in active"> <br> 
     <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT NAME</th>
                <th>SAMPLING COLLECTED BY</th>
                <th>SAMPLING DATE AND TIME</th>
                <th>RESULT</th>
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_waterlab_table'
            ])?>
        </tbody>
    </table> 
        </div>
         <div id="tab-2" class="tab-pane"> <br> 
         <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT NAME</th>
                <th>SAMPLING COLLECTED BY</th>
                <th>SAMPLING DATE AND TIME</th>
                <th>RESULT</th>
            </tr>
        </thead>
        <tbody>
            <?php

             for($x = 0 ; $x < sizeof($record_passed) ; $x++){
                
                $temp = isset(Yii::$app->params['result'][$record_passed[$x]->result])?Yii::$app->params['result'][$record_passed[$x]->result]:'Not set';
                
                 echo 
                 '<tr data-key="water-lab/view/?id='. $record_passed[$x]->id .'" title="Click to View">
                 <td>'.$record_passed[$x]->patientName.'</td>
                 <td>'.$record_passed[$x]->sampling_collected_by.'</td>
                 <td>'.$record_passed[$x]->sampling_date_time.'</td>
                 <td>'.$temp.'</td>
                 </tr>';
             }

            ?>
        </tbody>
    </table>    
        </div>
         <div id="tab-3" class="tab-pane"> <br> 
        <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT NAME</th>
                <th>SAMPLING COLLECTED BY</th>
                <th>SAMPLING DATE AND TIME</th>
                <th>RESULT</th>
            </tr>
        </thead>
        <tbody>
            <?php

             for($x = 0 ; $x < sizeof($record_failed) ; $x++){
                
                $temp = isset(Yii::$app->params['result'][$record_failed[$x]->result])?Yii::$app->params['result'][$record_failed[$x]->result]:'Not set';
                
                 echo 
                 '<tr data-key="water-lab/view/?id='. $record_failed[$x]->id .'" title="Click to View">
                 <td>'.$record_failed[$x]->patientName.'</td>
                 <td>'.$record_failed[$x]->sampling_collected_by.'</td>
                 <td>'.$record_failed[$x]->sampling_date_time.'</td>
                 <td>'.$temp.'</td>
                 </tr>';
             }

            ?>
        </tbody>
    </table>     
        </div>
         <div id="tab-4" class="tab-pane"> <br> 
       <table class="table table-bordered data">
        <thead>
            <tr>
                <th>PATIENT NAME</th>
                <th>SAMPLING COLLECTED BY</th>
                <th>SAMPLING DATE AND TIME</th>
                <th>RESULT</th>
            </tr>
        </thead>
        <tbody>
            <?php

             for($x = 0 ; $x < sizeof($record_null) ; $x++){
                
                $temp = isset(Yii::$app->params['result'][$record_null[$x]->result])?Yii::$app->params['result'][$record_null[$x]->result]:'Not set';
                
                 echo 
                 '<tr data-key="water-lab/view/?id='. $record_null[$x]->id .'" title="Click to View">
                 <td>'.$record_null[$x]->patientName.'</td>
                 <td>'.$record_null[$x]->sampling_collected_by.'</td>
                 <td>'.$record_null[$x]->sampling_date_time.'</td>
                 <td>'.$temp.'</td>
                 </tr>';
             }

            ?>
        </tbody>
    </table>   
        </div>
      </div>


</div>
