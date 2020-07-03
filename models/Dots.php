<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%dots}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $name_of_collection_unit
 * @property string $date_of_request
 * @property int $age
 * @property int $sex
 * @property int $telephone_number
 * @property string $history_of_treatment
 * @property string $disease_classification
 * @property string $reason_for_examination
 * @property string $type_of_specimen
 * @property string $test_requested
 * @property string $specimen
 * @property string $date_of_collection
 */
class Dots extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dots}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {

        return [
             [['patient_id', 'age', 'telephone_number','history_of_treatment', 'disease_classification', 'reason_for_examination', 'type_of_specimen', 'test_requested', 'specimen', 'date_of_collection', 'sex'], 'required'],       
            [['patient_id', 'age', 'telephone_number'], 'integer'],
            [['date_of_request'], 'safe'],
            [['history_of_treatment', 'disease_classification', 'reason_for_examination', 'type_of_specimen', 'test_requested', 'specimen', 'date_of_collection', 'sex'], 'string'],
            [['name_of_collection_unit'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient Name',
            'name_of_collection_unit' => 'Name Of Collection Unit',
            'date_of_request' => 'Date Of Request',
            'age' => 'Age',
            'sex' => 'Sex',
            'telephone_number' => 'Telephone Number',
            'history_of_treatment' => 'History Of Treatment',
            'disease_classification' => 'Disease Classification',
            'reason_for_examination' => 'Reason For Examination',
            'type_of_specimen' => 'Type Of Specimen',
            'test_requested' => 'Test Requested',
            'specimen' => 'Specimen',
            'date_of_collection' => 'Date Of Collection',
        ];
    }

    public function getPatient()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    public function getPatientName()
    {
        return ucwords($this->patient->name);
    }

    public function getTreatment()
    {
        return $this->hasMany(DotsTbTreatment::className(), ['dots_id' => 'id']);
    }

    public function getOpd()
    {
        return $this->hasMany(DotsOpdRecord::className(), ['dots_id' => 'id']);
    }

    public function getHistory()
    {
        return $this->processArray($this->history_of_treatment);
    }

    public function getDisease()
    {
        return $this->processArray($this->disease_classification);
    }

    public function getReason()
    {
        return $this->processArray($this->reason_for_examination);
    }

    public function getSpecimen()
    {
        return $this->processArray($this->type_of_specimen);
    }

    public function getRequested()
    {
        return $this->processArray($this->test_requested);
    }

    protected function processArray($array)
    {
        return str_replace(['[', ']', '"'], '', $array);
    }

    public function encodeData()
    {
        $this->history_of_treatment = json_encode($this->history_of_treatment);
        $this->disease_classification  = json_encode($this->disease_classification);
        $this->reason_for_examination  = json_encode($this->reason_for_examination);
        $this->type_of_specimen  = json_encode($this->type_of_specimen);
        $this->test_requested  = json_encode($this->test_requested);
    }

}
