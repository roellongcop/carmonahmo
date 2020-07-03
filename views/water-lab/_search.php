<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WaterLabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="water-lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'sampling_collected_by') ?>

    <?= $form->field($model, 'sampling_date_time') ?>

    <?= $form->field($model, 'sampling_point') ?>

    <?php // echo $form->field($model, 'specify_address_sampling_point') ?>

    <?php // echo $form->field($model, 'source_of_water_supply') ?>

    <?php // echo $form->field($model, 'type_of_ownership') ?>

    <?php // echo $form->field($model, 'type_of_well') ?>

    <?php // echo $form->field($model, 'well_usage') ?>

    <?php // echo $form->field($model, 'pump_required_priming') ?>

    <?php // echo $form->field($model, 'repair_done_within_2_months') ?>

    <?php // echo $form->field($model, 'water_treated') ?>

    <?php // echo $form->field($model, 'distance_from_well_of_the_following_in_meter') ?>

    <?php // echo $form->field($model, 'analysis_requested') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'location_of_well') ?>

    <?php // echo $form->field($model, 'received_by') ?>

    <?php // echo $form->field($model, 'date_time') ?>

    <?php // echo $form->field($model, 'labaratory_no') ?>

    <?php // echo $form->field($model, 'parameters_to_be_examined') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
