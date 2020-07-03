<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['page'] = 'Records';
$this->title = 'All Records';
$this->params['breadcrumbs'][] = $this->title;
$template = Yii::$app->template;
?>
<div class="about-index ibox float-e-margins ibox-content">
    <ul class="nav nav-tabs">

        <?php if ($template->user_can('index', 'birthing')) : ?>
            <li class="active"><a data-toggle="tab" href="#birthing">Birthing</a></li>
        <?php endif ?>

        <?php if ($template->user_can('index', 'dental')) : ?>
            <li><a data-toggle="tab" href="#dental">Dental</a></li>
        <?php endif ?>

        <?php if ($template->user_can('index', 'medical')) : ?>
            <li><a data-toggle="tab" href="#medical">Medical</a></li>
        <?php endif ?>

        <?php if ($template->user_can('index', 'dots')) : ?>
            <li><a data-toggle="tab" href="#dots">DOTS</a></li>
        <?php endif ?>

        <?php if ($template->user_can('index', 'water-lab')) : ?>
            <li><a data-toggle="tab" href="#water">Water Laboratory</a></li>
        <?php endif ?>

    </ul>

    <div class="tab-content">

        <?php if ($template->user_can('index', 'birthing')) : ?>
            <div id="birthing" class="tab-pane fade in active"> <br> 
                <?= $this->render('_birthing', ['data' => $birthing]) ?>
            </div>
        <?php endif ?>



        <?php if ($template->user_can('index', 'dental')) : ?>
            <div id="dental" class="tab-pane fade in"> <br> 
                <?= $this->render('_dental', ['data' => $dental]) ?>
            </div>
        <?php endif ?>


        <?php if ($template->user_can('index', 'medical')) : ?>
            <div id="medical" class="tab-pane fade in"> <br> 
                <?= $this->render('_medical', ['data' => $medical]) ?>
            </div>
        <?php endif ?>

        <?php if ($template->user_can('index', 'dots')) : ?>
            <div id="dots" class="tab-pane fade in"> <br> 
                <?= $this->render('_dots', ['data' => $dots]) ?>
            </div>
        <?php endif ?>

        <?php if ($template->user_can('index', 'water-lab')) : ?>
            <div id="water" class="tab-pane fade in"> <br> 
                <?= $this->render('_waterlab', ['data' => $waterlab]) ?>
            </div>
        <?php endif ?>


    </div>




    
   
</div>
