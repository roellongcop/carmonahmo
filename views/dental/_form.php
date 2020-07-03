<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dental */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
    .oral-condition td input {
        width: 150px;
    }
    .btn-tooth-number {
        -moz-transition: all 0.1s;
        -webkit-transition: all 0.1s;
        transition: all 0.1s;
    }
    .btn-tooth-number:hover {
        -moz-transform: scale(1.3);
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
        cursor: pointer;
    }
 
    /*table {
        text-align: center;
    }*/
</style>
<div class="dental-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'patient_id')
                ->dropDownList($users,  
                    ['prompt' => 'Select Incharge']
                )
            ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <p class="lead col-md-12">Chief Complaint</p>
            <ul class="todo-list">
                <li>
                    <input type="checkbox" value="Pain" <?= valueHelper('Pain', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Pain</span>
                </li>
                <li>
                    <input type="checkbox" value="Swelling" <?= valueHelper('Swelling', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Swelling</span>
                </li>
                <li>
                    <input type="checkbox" value="Decayed" <?= valueHelper('Decayed', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Decayed</span>
                </li>
                <li>
                    <input type="checkbox" value="Checkup" <?= valueHelper('Checkup', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Checkup</span>
                </li>
                <li>
                    <input type="checkbox" value="Bleeding" <?= valueHelper('Bleeding', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Bleeding</span>
                </li>
                <li>
                    <input type="checkbox" value="Headache" <?= valueHelper('Headache', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Headache</span>
                </li>
                <li>
                    <input type="checkbox" value="Gum redness" <?= valueHelper('Gum redness', $model->chief_complaint) ?> name="Dental[chief_complaint][]" class="i-checks"/>
                    <span class="m-l-xs">Gum redness</span>
                </li>
                <li>
                    <input type="text" name="Dental[chief_complaint][]" class="form-control" placeholder="Other">
                </li>
            </ul>
        </div>

        <div class="col-md-4">
            <p class="lead col-md-12">Medical History</p>
            <ul class="todo-list">
                <li>
                    <input type="checkbox" value="Heart Ailment" <?= valueHelper('Heart Ailment', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Heart Ailment</span>
                </li> 
                <li>
                    <input type="checkbox" value="Hypertension" <?= valueHelper('Hypertension', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Hypertension</span>
                </li>
                <li>
                    <input type="checkbox" value="Anemia" <?= valueHelper('Anemia', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Anemia</span>
                </li>
                <li>
                    <input type="checkbox" value="Epilepsy" <?= valueHelper('Epilepsy', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Epilepsy</span>
                </li>

                <li>
                    <input type="checkbox" value="Allergies" <?= valueHelper('Allergies', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Allergies</span>
                </li>

                <li>
                    <input type="checkbox" value="Diabetes" <?= valueHelper('Diabetes', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Diabetes</span>
                </li>

                <li>
                    <input type="checkbox" value="Thyroid Disease" <?= valueHelper('Thyroid Disease', $model->medical_history) ?> name="Dental[medical_history][]" class="i-checks"/>
                    <span class="m-l-xs">Thyroid Disease</span>
                </li>

                <li>
                    <input type="text" name="Dental[medical_history][]" class="form-control" placeholder="Other">
                </li>
            </ul>
        </div>


        <div class="col-md-4">
            <p class="lead col-md-12">Dental History</p>
            <ul class="todo-list">
                <li>
                    <input type="checkbox" value="Permanent Filling" <?= valueHelper('Permanent Filling', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">Permanent Filling</span>
                </li>

                <li>
                    <input type="checkbox" value="Temporary Filling" <?= valueHelper('Temporary Filling', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">Temporary Filling</span>
                </li>

                <li>
                    <input type="checkbox" value="Oral Prophylaxis" <?= valueHelper('Oral Prophylaxis', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">Oral Prophylaxis</span>
                </li>

                <li>
                    <input type="checkbox" value="RCT" <?= valueHelper('RCT', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">RCT</span>
                </li>
                

                <li>
                    <input type="checkbox" value="Pulpectomy" <?= valueHelper('Pulpectomy', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">Pulpectomy</span>
                </li>

                <li>
                    <input type="checkbox" value="Alveolectomy" <?= valueHelper('Alveolectomy', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">Alveolectomy</span>
                </li>

                <li>
                    <input type="checkbox" value="Extraction" <?= valueHelper('Extraction', $model->dental_history) ?> name="Dental[dental_history][]" class="i-checks"/>
                    <span class="m-l-xs">Extraction</span>
                </li>

                <li>
                    <input type="text" name="Dental[dental_history][]" class="form-control" placeholder="Other">
                </li>
            </ul>
        </div>

        
    </div>


    <hr>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'diagnosis')->textarea(['rows' => 5]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'treatment')->textarea(['rows' => 5]) ?>
        </div>
    </div>


    <hr>


    <div class="row">
        <?php $oral = ($model->oral_condition) ? json_decode($model->oral_condition) : null; ?>
        <div class="col-md-12">
            <center>
                <p class="lead">ORAL HEALTH CONDITION</p>
            </center>
            <table  class=" table-bordered oral-condition">
                <tbody>
                    <tr>
                        <td style="padding-left: 5px;"> DATE</td>

                        <td>
                            <input 
                            type="date" 
                            name="Dental[oral_condition][date][]" 
                            value="<?= ($oral) ? $oral->date[0] : '' ?>">
                        </td>

                        <td>
                            <input 
                            type="date" 
                            name="Dental[oral_condition][date][]" 
                            value="<?= ($oral) ? $oral->date[1] : '' ?>">
                        </td>


                        <td>
                            <input 
                            type="date" 
                            name="Dental[oral_condition][date][]" 
                            value="<?= ($oral) ? $oral->date[2] : '' ?>">
                        </td>

                        <td>
                            <input 
                            type="date" 
                            name="Dental[oral_condition][date][]" 
                            value="<?= ($oral) ? $oral->date[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="date" 
                            name="Dental[oral_condition][date][]" 
                            value="<?= ($oral) ? $oral->date[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="date" 
                            name="Dental[oral_condition][date][]" 
                            value="<?= ($oral) ? $oral->date[5] : '' ?>">
                        </td>
                    </tr>


                    <tr>
                        <td style="padding-left: 5px;">CARRIES</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][carries][]"
                            value="<?= ($oral) ? $oral->carries[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][carries][]"
                            value="<?= ($oral) ? $oral->carries[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][carries][]"
                            value="<?= ($oral) ? $oral->carries[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][carries][]"
                            value="<?= ($oral) ? $oral->carries[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][carries][]"
                            value="<?= ($oral) ? $oral->carries[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][carries][]"
                            value="<?= ($oral) ? $oral->carries[5] : '' ?>">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-left: 5px;">GINGIVITIS</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][gingivitis][]"
                            value="<?= ($oral) ? $oral->gingivitis[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][gingivitis][]"
                            value="<?= ($oral) ? $oral->gingivitis[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][gingivitis][]"
                            value="<?= ($oral) ? $oral->gingivitis[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][gingivitis][]"
                            value="<?= ($oral) ? $oral->gingivitis[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][gingivitis][]"
                            value="<?= ($oral) ? $oral->gingivitis[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][gingivitis][]"
                            value="<?= ($oral) ? $oral->gingivitis[5] : '' ?>">
                        </td>
                    </tr>
                    

                    <tr>
                        <td style="padding-left: 5px;">P-POCKETS</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][pockets][]"
                            value="<?= ($oral) ? $oral->pockets[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][pockets][]"
                            value="<?= ($oral) ? $oral->pockets[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][pockets][]"
                            value="<?= ($oral) ? $oral->pockets[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][pockets][]"
                            value="<?= ($oral) ? $oral->pockets[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][pockets][]"
                            value="<?= ($oral) ? $oral->pockets[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][pockets][]"
                            value="<?= ($oral) ? $oral->pockets[5] : '' ?>">
                        </td>
                    </tr> 

                    <tr>
                        <td style="padding-left: 5px;">DEBRIS</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][debris][]"
                            value="<?= ($oral) ? $oral->debris[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][debris][]"
                            value="<?= ($oral) ? $oral->debris[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][debris][]"
                            value="<?= ($oral) ? $oral->debris[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][debris][]"
                            value="<?= ($oral) ? $oral->debris[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][debris][]"
                            value="<?= ($oral) ? $oral->debris[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][debris][]"
                            value="<?= ($oral) ? $oral->debris[5] : '' ?>">
                        </td>
                    </tr>  

                    <tr>
                        <td style="padding-left: 5px;">CALCULUS</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][calculus][]"
                            value="<?= ($oral) ? $oral->calculus[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][calculus][]"
                            value="<?= ($oral) ? $oral->calculus[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][calculus][]"
                            value="<?= ($oral) ? $oral->calculus[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][calculus][]"
                            value="<?= ($oral) ? $oral->calculus[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][calculus][]"
                            value="<?= ($oral) ? $oral->calculus[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][calculus][]"
                            value="<?= ($oral) ? $oral->calculus[5] : '' ?>">
                        </td>
                    </tr>  
                    

                    <tr>
                        <td style="padding-left: 5px;">NEOPLASM</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][neoplasm][]"
                            value="<?= ($oral) ? $oral->neoplasm[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][neoplasm][]"
                            value="<?= ($oral) ? $oral->neoplasm[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][neoplasm][]"
                            value="<?= ($oral) ? $oral->neoplasm[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][neoplasm][]"
                            value="<?= ($oral) ? $oral->neoplasm[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][neoplasm][]"
                            value="<?= ($oral) ? $oral->neoplasm[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][neoplasm][]"
                            value="<?= ($oral) ? $oral->neoplasm[5] : '' ?>">
                        </td>
                    </tr>  


                    <tr>
                        <td style="padding-left: 5px;">CLEFT-LIP</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_lip][]"
                            value="<?= ($oral) ? $oral->cleft_lip[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_lip][]"
                            value="<?= ($oral) ? $oral->cleft_lip[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_lip][]"
                            value="<?= ($oral) ? $oral->cleft_lip[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_lip][]"
                            value="<?= ($oral) ? $oral->cleft_lip[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_lip][]"
                            value="<?= ($oral) ? $oral->cleft_lip[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_lip][]"
                            value="<?= ($oral) ? $oral->cleft_lip[5] : '' ?>">
                        </td>
                    </tr>
                    

                    <tr>
                        <td style="padding-left: 5px;">CLEFT-PALATE</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_palate][]"
                            value="<?= ($oral) ? $oral->cleft_palate[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_palate][]"
                            value="<?= ($oral) ? $oral->cleft_palate[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_palate][]"
                            value="<?= ($oral) ? $oral->cleft_palate[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_palate][]"
                            value="<?= ($oral) ? $oral->cleft_palate[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_palate][]"
                            value="<?= ($oral) ? $oral->cleft_palate[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][cleft_palate][]"
                            value="<?= ($oral) ? $oral->cleft_palate[5] : '' ?>">
                        </td>
                    </tr>
                    

                    <tr>
                        <td style="padding-left: 5px;">TOTAL DMF/DF</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][dmf][]"
                            value="<?= ($oral) ? $oral->dmf[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][dmf][]"
                            value="<?= ($oral) ? $oral->dmf[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][dmf][]"
                            value="<?= ($oral) ? $oral->dmf[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][dmf][]"
                            value="<?= ($oral) ? $oral->dmf[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][dmf][]"
                            value="<?= ($oral) ? $oral->dmf[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][dmf][]"
                            value="<?= ($oral) ? $oral->dmf[5] : '' ?>">
                        </td>
                    </tr>
                    

                    <tr>
                        <td style="padding-left: 5px;">OTHERS</td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][others][]"
                            value="<?= ($oral) ? $oral->others[0] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][others][]"
                            value="<?= ($oral) ? $oral->others[1] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][others][]"
                            value="<?= ($oral) ? $oral->others[2] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][others][]"
                            value="<?= ($oral) ? $oral->others[3] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][others][]"
                            value="<?= ($oral) ? $oral->others[4] : '' ?>">
                        </td>
                        <td>
                            <input 
                            type="text" 
                            name="Dental[oral_condition][others][]"
                            value="<?= ($oral) ? $oral->others[5] : '' ?>">
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </div>
    <hr>

   <div class="row">
        <div class="col-md-12">
            <p class="lead">DENTAL HEALTH STATUS</p>
        </div>
        <div class="col-md-9" id="choose-number">
            <label>Tooth Number</label> <br>
            <?php for ($i=18; $i >= 11; $i--) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a>
            <?php endfor; ?>
            
            <?php for ($i=21; $i <= 28; $i++) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a> 
            <?php endfor; ?>
            <br>
            <?php for ($i=48; $i >= 41; $i--) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a>
            <?php endfor; ?>
            
            <?php for ($i=31; $i <= 38; $i++) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a> 
            <?php endfor; ?>
            
            <br>
            
            <div class="col-md-10 col-md-offset-2">
            <?php for ($i=55; $i >= 51; $i--) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a>
            <?php endfor; ?>
            
            <?php for ($i=61; $i <= 65; $i++) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a>
            <?php endfor; ?> 
            <br> 
            <?php for ($i=85; $i >= 81; $i--) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a>
            <?php endfor; ?> 
            <?php for ($i=71; $i <= 75; $i++) : ?>
                <a class="btn btn-white btn-tooth-number" 
                    data-key="<?= ($i < 10) ? '0'. $i : $i ?>">
                    <?= ($i < 10) ? '0'. $i : $i ?>
                </a>
            <?php endfor; ?>
            
            </div>
            <br>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label>Treatment</label>
                    <div class="input-group col-md-8">
                        <select class="form-control tooth-treatment">
                            <option value="">Treatment</option>
                            <option>CAVITY</option>
                            <option>FILL</option>
                            <option>INDICATED FOR EXO</option>
                            <option>EXTRACTED</option>
                            <option>PONTICS</option>
                            <option>SEALANT</option>
                            <option>TEMPORARY FILLING</option>
                            <option>UNERRUPTED</option>
                        </select>
                        <span class="input-group-btn"> 
                            <a title="Create Serial" class="btn btn-primary btn-add-dental">
                                Add 
                            </a> 
                        </span>
                    </div>
                </div>
            </div>

        </div>  

        <div class="col-md-6"> <br>
            <div class="table-responsive" style="height: 340px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>TOOTH NUMBER</th>
                            <th>TREATMENT</th>
                            <th>REMOVE</th>
                        </tr>
                    </thead>
                    <tbody id="dental-status">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    <br> <hr>
    <div class="form-group">
        
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

</div>

<?php 
function valueHelper($value, $category) {
    $category = json_decode($category, true);
    if ($category) {
        if (in_array($value, $category)) {
           return 'checked';
        } 
    }
  
}

$script = <<< JS
    $(document).ready(function() {
        var dental_health = '{$model->dental_health}';
        var selected_tooth = [];

        $('.btn-tooth-number').on('click', function() {
            var tooth_number = $(this).data('key');
            

            if(selected_tooth.includes(tooth_number)) {
                $(this).removeClass('btn-success');
                $(this).addClass('btn-white');
                selected_tooth.forEach((tooth, index) => {
                    if(tooth == tooth_number) {
                        selected_tooth.splice(index, 1);
                    }    
                })
            } else {
                $(this).removeClass('btn-white');
                $(this).addClass('btn-success');
                selected_tooth.push(tooth_number);
            }
        })

        if (dental_health) {
            dental_health = JSON.parse(dental_health);

            dental_health.forEach(dental => {
                var html = '<tr>' +
                    '<td><input type="hidden" name="tooth_number[]" value="'+ dental.tooth_number +'">' + dental.tooth_number + '</td>' +
                    '<td><input type="hidden" name="treatment[]" value="'+ dental.treatment +'">' + dental.treatment + '</td>' +
                    '<td><a class="btn btn-danger btn-sm btn-remove-dental"> Remove </a></td>' +
                '</tr>';
                 $('#dental-status').prepend(html);

                $('.btn-remove-dental').on('click', function() {
                    $(this).closest('tr').remove();
                });
                
            });

        }
       

        $('.btn-add-dental').on('click', function() {
            var html = '';
            selected_tooth.forEach((tooth, index) => {


                if($('.tooth-treatment').val() == 'EXTRACTED'){
                    var disable =  $("#choose-number").find("[data-key='" + tooth + "']");
                   
                    disable.replaceWith( "<div class='btn btn-danger'>"+tooth+"</div>" );
                    disable.css('filter','blur(1px)'); 
                }

                html += '<tr>' +
                    '<td><input type="hidden" name="tooth_number[]" value="'+ tooth +'">' + tooth + '</td>' +
                    '<td><input type="hidden" name="treatment[]" value="'+ $('.tooth-treatment').val() +'">' + $('.tooth-treatment').val() + '</td>' +
                    '<td><a class="btn btn-danger btn-sm btn-remove-dental"> Remove </a></td>' +
                '</tr>'  ;

            });

            $('#dental-status').prepend(html);

            selected_tooth = [];

            if($('.btn-tooth-number').hasClass('btn-success')) {
                $('.btn-tooth-number').removeClass('btn-success');
                $('.btn-tooth-number').addClass('btn-default');
            }

            $('.btn-remove-dental').on('click', function() {
                $(this).closest('tr').remove();
            });
        });

    });
JS;

$this->registerJs($script);