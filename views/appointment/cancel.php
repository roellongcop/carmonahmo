<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */

$this->params['page'] = ' Appointments';
$this->title = 'Cancel Appointments';
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['/appointment']];
$this->params['breadcrumbs'][] = ['label' => $model->complaint->name, 'url' => ['appointment/view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-view  ibox float-e-margins ibox-content">

    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-6">
                <label><h3>Provide Reason</h3></label>
                <textarea class="form-control" rows="10" name="reason"></textarea>

                <br>
                <p>
                    <button class="btn btn-success">
                        Confirm
                    </button>
                </p>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>

