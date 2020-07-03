<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BirthingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Birthing';
$this->title = 'Birthing Program Monitoring';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring', 'url' => ['birthing/monitoring', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $model->patient;
?>
<div class="birthing-index ibox float-e-margins ibox-content">
    <p>
        <?php if ($model->pregnancy > 0) : ?>
            <button class="btn btn-info dim btn-lg">
                <i class="fa fa-child"></i>
                <?= $model->pregnancy ?> <?= ($model->pregnancy == 1) ? 'Week' : 'Weeks' ?> Pregnant
            </button>
        <?php endif; ?>
        
    </p>
   
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab-1">ASSESSMENT/CHECKUPS</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-2">MONITORING SHEET</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-3">INTRAVENOUS FLUID</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-4">WEIGHT PROGRESS</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-5">PHYSICIAN'S ORDERS</a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab-6">NEWBORN BABY</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade in active"> <br>
            <?= Yii::$app->template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['birthing-assessment/create', 'birthing_id' => $model->id],
            ]) ?>

            
            <?= $this->render('/birthing-assessment/_detail', ['model' => $model]) ?>
            
        </div>
        <div id="tab-2" class="tab-pane fade">  <br>

            <?= Yii::$app->template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['birthing-monitoring-sheet/create', 'birthing_id' => $model->id],
            ]) ?>

            <?= $this->render('/birthing-monitoring-sheet/_detail', ['model' => $model]) ?>

        </div>
         <div id="tab-3" class="tab-pane fade">  <br>

            <?= Yii::$app->template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['birthing-intravenous-fluid/create', 'birthing_id' => $model->id],
            ]) ?>

            <?= $this->render('/birthing-intravenous-fluid/_detail', ['model' => $model]) ?>

        </div>
        <div id="tab-4" class="tab-pane fade"> <br>

            <?= Yii::$app->template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['birthing-weight-progress/create', 'birthing_id' => $model->id],
            ]) ?>

            <?= $this->render('/birthing-weight-progress/_detail', ['model' => $model]) ?>

        </div>
        <div id="tab-5" class="tab-pane fade"> <br>

            <?= Yii::$app->template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['birthing-physician-order/create', 'birthing_id' => $model->id],
            ]) ?>

            <?= $this->render('/birthing-physician-order/_detail', ['model' => $model]) ?>

        </div>
        <div id="tab-6" class="tab-pane fade"> <br>
            <?= Yii::$app->template->link([
                'title' => '<button class="btn btn-primary dim btn-sm">
                    <i class="fa fa-plus-square"></i> Create Record
                    </button>',
                'url' => ['birthing-newborn/create', 'birthing_id' => $model->id],
            ]) ?>
            
                
            <?= $this->render('/birthing-newborn/_detail', ['model' => $model]) ?>

        </div>
        
    </div>

</div>
 