<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">
                    <?php
                    
                        if(isset($limit)?$limit:false ){
                            echo '
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn btn-danger" style=" width: 100%; white-space: initial;"> Can\'t book an appointment. Booking of appointment is limited for 200 patient a day. Sorry, you can try tommorrow.  </div>
                        </div>
                    </div> ';     
                        }
                        else{

                        ?>
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            
            <?= $form->field($model, 'complaint_id')
                ->dropDownList($complaints,  
                    ['prompt' => 'Select Complaint']
                )
            ?>

            <?= $form->field($model, 'scheduled_date')->textInput([
                'id' => 'datepicker2',
                 'onchange' => '
                 
                   var s=$(this).val();
                   s = s.substr(6,4) +("-")+ s.substr(0,2) + ("-") + s.substr(3,2);
    console.log("site/check?&date=\'"+s+"\'");
                    $.post(" '. Url::to(['appointment/check']).'?&date=\'"+s+"\'",function(data){
                        console.log(data);
                      $("select#appointment-scheduled_time").html(data);
                    });'
            ]) ?>
    
            <?= $form->field($model, 'scheduled_time')
                ->dropDownList([],  
                    ['prompt' => 'Select Date First' , 
                    'style' => 'height:35px',
                    // 'onchange' => '
                    // $.post("site/check?&date=' . '"+$(this).val(),function(data){
                    //     console.log(data);
                    //   $("select#appointment-complaint_id").html(data);
                    // });'
                    ]
                )
            ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </div>
    </div> 



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php } ?>

</div>
