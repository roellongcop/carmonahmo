    <?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm; 
    ?>

    <section class="appointment-area" id="about">           
        <div class="container">
            <div class="row justify-content-between align-items-center pb-120 appointment-wrap">
                <div class="col-lg-5 col-md-6 appointment-left">
                    <h1> About <?= $name[0]->description ?> </h1>

                    


                    <p class="mho-description">
                        <?= $name[1]->description ?>
                        <br><br>
                    </p>
                </div>
                <div style="margin-top:85px" class="col-lg-6 col-md-6 appointment-right pt-60 pb-60" id="book">
                    <?php $form = ActiveForm::begin(); ?>
                    
                        <h3 class="pb-20 text-center mb-30">
                            Book an Appointment
                        </h3> 

                        <?php
                        
                            if($limit){
                                echo '
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn btn-danger" style=" width: 100%; white-space: initial;"> Can\'t book an appointment. Booking of appointment is limited for 200 patient a day. Sorry, you can try tommorrow.  </div>
                            </div>
                        </div> ';     
                            }
                            else{

                            ?>

                        <?= $form->field($model, 'authkey')
                            ->textInput()
                            ->label('Verification Code') 
                        ?>


                        <?= $form->field($model, 'scheduled_date')->textInput([
                            'id' => 'datepicker2',
                             'onchange' => '
                             
                               var s=$(this).val();
                               s = s.substr(6,4) +("-")+ s.substr(0,2) + ("-") + s.substr(3,2);
        console.log("site/check?&date=\'"+s+"\'");
                                $.post("site/check?&date=\'"+s+"\'",function(data){
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




                        <?= $form->field($model, 'complaint_id')
                            ->dropDownList($complaints,  
                                ['prompt' => 'Select Complaint']
                            )
                        ?>


                        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Confirm Appointment', [
                                'class' => 'primary-btn text-uppercase'
                            ]) ?>
                        </div>
                        
                        <?php } ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>  
    </section>