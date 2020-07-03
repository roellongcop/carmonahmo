<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%dots_tb_treatment}}".
 *
 * @property int $id
 * @property int $dots_id
 * @property int $tb_case_number
 * @property string $region
 * @property string $name_of_dots_facility
 * @property string $bcg_scar
 * @property string $other_patient_details
 * @property string $diagnostic_test
 * @property string $diagnosis
 * @property string $history_of_anti_tb_drug_intake
 * @property string $bacteriological_status
 * @property string $classification_of_tb_disease
 * @property string $registeration_group
 * @property string $treatment_started
 * @property string $treatment_outcome
 * @property string $clinical_examination_before_and_during_treatment
 * @property string $dosage_and_preperation
 */
class DotsTbTreatment extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dots_tb_treatment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
         [['date_the_card_was_opened','tb_disease_treatment_regimen','house_hold_members','source_of_patient','region', 'name_of_dots_facility', 'bcg_scar', 'other_patient_details', 'diagnostic_test', 'diagnosis', 'history_of_anti_tb_drug_intake', 'bacteriological_status', 'classification_of_tb_disease', 'registeration_group', 'treatment_started', 'treatment_outcome', 'clinical_examination_before_and_during_treatment', 'dosage_and_preperation'], 'required'],
            [['dots_id', 'tb_case_number'], 'integer'],
            [['region', 'name_of_dots_facility', 'bcg_scar', 'other_patient_details', 'diagnostic_test', 'diagnosis', 'history_of_anti_tb_drug_intake', 'bacteriological_status', 'classification_of_tb_disease', 'registeration_group', 'treatment_started', 'treatment_outcome', 'clinical_examination_before_and_during_treatment', 'dosage_and_preperation'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dots_id' => 'Dots ID',
            'tb_case_number' => 'Tb Case Number',
            'region' => 'Region',
            'name_of_dots_facility' => 'Name Of Dots Facility',
            'bcg_scar' => 'Bcg Scar',
            'other_patient_details' => 'Other Patient Details',
            'diagnostic_test' => 'Diagnostic Test',
            'diagnosis' => 'Diagnosis',
            'history_of_anti_tb_drug_intake' => 'History Of Anti Tb Drug Intake',
            'bacteriological_status' => 'Bacteriological Status',
            'classification_of_tb_disease' => 'Classification Of Tb Disease',
            'registeration_group' => 'Registeration Group',
            'treatment_started' => 'Treatment Started',
            'treatment_outcome' => 'Treatment Outcome',
            'clinical_examination_before_and_during_treatment' => 'Clinical Examination Before And During Treatment',
            'dosage_and_preperation' => 'Dosage And Preperation',
        ];
    }

        public function getDots()
    {
        return $this->hasOne(Dots::className(), ['id' => 'dots_id']);
    }

    public function getPatient()
    {
        return $this->dots->patient;
    }

    public function getPatientDetail()
    {
        return $this->processArray($this->other_patient_details);
    }

    public function getDiagnostic()
    {

        $ul = '';

        if ($this->diagnostic_test && is_array(json_decode($this->diagnostic_test, true))) {
            $diagnosis = json_decode($this->diagnostic_test, true);
            
            $ul = '<ul>';
            foreach ($diagnosis as $key => $diagnose) {
                $ul .= '<li>'. json_encode($diagnose) .'</li>';
            }
            $ul .= '<ul>';
        }
        return $ul;
    }

    public function getClinical()
    {
        return $this->processArray($this->clinical_examination_before_and_during_treatment);
    }

    public function getDosage()
    {
        return $this->processArray($this->dosage_and_preperation);
    }


    protected function processArray($array)
    {
        return str_replace(['[', ']', '"'], '', $array);
    }


}
