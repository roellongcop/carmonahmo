<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Tb';
$this->params['second'] = 'TbProgram';
$this->title = 'TB Program Monitoring';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['dots/monitoring', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $model->patientName;
$template = Yii::$app->template;

?>
<div class="birthing-index ibox float-e-margins ibox-content">
   
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab-1">TB TREATMENT/IPT CARD</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-2">OPD RECORD</a>
        </li>

    </ul>


      <div class="tab-content">
        <div id="tab-1" class="tab-pane fade in active"> <br> 
            <?= $template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['dots-tb-treatment/create', 'dots_id' => $model->id],
            ]) ?>

            <?= $this->render('/dots-tb-treatment/_detail', ['model' => $model]) ?>
        </div>
         <div id="tab-2" class="tab-pane"> <br> 
            <?= $template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['dots-opd-record/create', 'dots_id' => $model->id],
            ]) ?>
            
            
            <?= $this->render('/dots-opd-record/_detail', ['model' => $model]) ?>
        </div>
      </div>
</div>