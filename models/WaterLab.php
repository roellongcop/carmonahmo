<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%water_lab}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $sampling_collected_by
 * @property string $sampling_date_time
 * @property string $sampling_point
 * @property string $specify_address_sampling_point
 * @property string $source_of_water_supply
 * @property string $type_of_ownership
 * @property string $type_of_well
 * @property string $well_usage
 * @property string $pump_required_priming
 * @property string $repair_done_within_2_months
 * @property string $water_treated
 * @property string $distance_from_well_of_the_following_in_meter
 * @property string $analysis_requested
 * @property string $designation
 * @property string $location_of_well
 * @property string $received_by
 * @property string $date_time
 * @property int $labaratory_no
 * @property string $parameters_to_be_examined
 */
class WaterLab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%water_lab}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
             [['patient_id'], 'required'],
            [['patient_id', 'labaratory_no', 'status'], 'integer'],
            [['sampling_date_time', 'date_time','result'], 'safe'],
            [['sampling_point', 'specify_address_sampling_point', 'source_of_water_supply', 'type_of_ownership', 'type_of_well', 'well_usage', 'pump_required_priming', 'repair_done_within_2_months', 'water_treated', 'distance_from_well_of_the_following_in_meter', 'analysis_requested', 'designation', 'location_of_well', 'parameters_to_be_examined'], 'string'],
            [['sampling_collected_by', 'received_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Name',
            'sampling_collected_by' => 'Sampling Collected By',
            'sampling_date_time' => 'Sampling Date Time',
            'sampling_point' => 'Sampling Point',
            'specify_address_sampling_point' => 'Specify Address Sampling Point',
            'source_of_water_supply' => 'Source Of Water Supply',
            'type_of_ownership' => 'Type Of Ownership',
            'type_of_well' => 'Type Of Well',
            'well_usage' => 'Well Usage',
            'pump_required_priming' => 'Pump Required Priming',
            'repair_done_within_2_months' => 'Repair Done Within 2 Months',
            'water_treated' => 'Water Treated',
            'distance_from_well_of_the_following_in_meter' => 'Distance From Well Of The Following In Meter',
            'analysis_requested' => 'Analysis Requested',
            'designation' => 'Designation',
            'location_of_well' => 'Location Of Well',
            'received_by' => 'Received By',
            'date_time' => 'Date Time',
            'labaratory_no' => 'Labaratory No',
            'parameters_to_be_examined' => 'Parameters To Be Examined',
            'status' => 'Status',
            'patientName' => 'Name',
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


    public function getSP()
    {
        return $this->processArray($this->sampling_point);
    }

    public function getSWS()
    {
        return $this->processArray($this->source_of_water_supply);
    }

    public function getTO()
    {
        return $this->processArray($this->type_of_ownership);
    }

    public function getTW()
    {
        return $this->processArray($this->type_of_well);
    }

    public function getWU()
    {
        return $this->processArray($this->well_usage);
    }

    public function getPRP()
    {
        return $this->processArray($this->pump_required_priming);
    }

    public function getPDWM()
    {
        return $this->processArray($this->repair_done_within_2_months);
    }

    public function getWT()
    {
        return $this->processArray($this->water_treated);
    }

    public function getDWFM()
    {
        return $this->processArray($this->distance_from_well_of_the_following_in_meter);
    }

    public function getAR()
    {
        return $this->processArray($this->analysis_requested);
    }

    protected function processArray($array)
    {
        return str_replace(['[', ']', '"'], '', $array);
    }
}
