<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Archive';
$this->title = 'Archive';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('Archive Data', ['backup'], ['class' => 'btn btn-primary']);



$data = scandir('backup');
$data = array_values(array_diff($data, array('.', '..')));

?>
<div class="birthing-index ibox float-e-margins ibox-content">

<?php

if( isset($isRestore) ){
    echo '<h1 style="    background: #69be00;
    color: white;
    padding: 10px;"> Data Successfully Restored. </h1>';
}


// if( isset($isRemove) ){
//     echo '<h1 style="    background: red;
//     color: white;
//     padding: 10px;"> '. $path .' Removed. </h1>';
// }

?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        
         <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Archieve Data Name</th>

            </tr>
        </thead>
        <tbody>
        <?php
        
        if(sizeof($data) == 0 ){
            echo '<tr><td>Nothing to show</td></tr>';
        }
             for($x=0; $x < sizeof($data) ;$x++){
                echo '<tr >
                <td style="font-size:15px">'.$data[$x].'
                <div style="float:right">'
                .Html::a('restore data', ['restore' ,'path' => $data[$x]], ['class' => 'btn btn-info'])
                .' '.Html::a('remove', ['remove', 'path' => $data[$x]], ['class' => 'btn btn-danger']).
                '</div>
                </td>
                </tr>';
             }
        ?>
        </tbody>
    </table>
    
</div>
