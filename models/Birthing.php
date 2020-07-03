<?php

namespace app\models;

use Yii;
use DateTime;
/**
 * This is the model class for table "{{%birthing}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $chief_complaint
 * @property string $start_of_pregnancy
 * @property string $end_of_pregnancy
 * @property string $guardian_name
 * @property string $guardian_civil_status
 * @property int $guardian_gender
 * @property string $guardian_contact
 * @property int $guardian_age
 * @property string $guardian_relationship
 * @property string $guardian_address
 * @property string $date_added
 */
class Birthing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%birthing}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'chief_complaint', 'start_of_pregnancy', 'end_of_pregnancy', 'guardian_name', 'guardian_civil_status', 'guardian_gender', 'guardian_contact', 'guardian_age', 'guardian_relationship', 'guardian_address'], 'required'],
            [['patient_id', 'guardian_gender', 'status'], 'integer'],
            [['chief_complaint', 'guardian_address'], 'string'],
            [['start_of_pregnancy', 'end_of_pregnancy', 'date_added'], 'safe'],
            [['guardian_name'], 'string', 'max' => 128],
            [['guardian_civil_status', 'guardian_contact', 'guardian_relationship'], 'string', 'max' => 32],
            [['guardian_age'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient Name (Pangalan ng Pasyente)',
            'chief_complaint' => 'Chief Complaint (Punong Reklamo)',
            'start_of_pregnancy' => 'Start Of Pregnancy (Simula Ng Pagbubuntis)',
            'end_of_pregnancy' => 'End Of Pregnancy (Pagtatapos Ng Pagbubuntis)',
            'guardian_name' => 'Guardian Name (Pangalan)',
            'guardian_civil_status' => 'Guardian Civil Status (Katayuang Sibil)' ,
            'guardian_gender' => 'Guardian Gender (Kasarian)',
            'guardian_contact' => 'Guardian Telephone|Mobile no. (Numero ng Telepono)',
            'guardian_age' => 'Guardian Age (Edad)',
            'guardian_relationship' => 'Guardian Relationship (Relasyon sa tagapangalaga)',
            'guardian_address' => 'Guardian Address (tirahan)',
            'date_added' => 'Date (Petsa)',
            'status' => 'Status',
        ];
    }

    public function getAssessment()
    {
        return $this->hasMany(BirthingAssessment::className(), ['birthing_id' => 'id']);
    }

    public function getIntravenous()
    {
        return $this->hasMany(BirthingIntravenousFluid::className(), ['birthing_id' => 'id']);
    }


    public function getSheet()
    {
        return $this->hasMany(BirthingMonitoringSheet::className(), ['birthing_id' => 'id']);
    }

    public function getNewborn()
    {
        return $this->hasMany(BirthingNewborn::className(), ['birthing_id' => 'id']);
    }


    public function getPhysician()
    {
        return $this->hasMany(BirthingPhysicianOrder::className(), ['birthing_id' => 'id']);
    }


    public function getWeightProgress()
    {
        return $this->hasMany(BirthingWeightProgress::className(), ['birthing_id' => 'id']);
    }
    
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    public function getPatient()
    {
        return ucwords($this->user->name);
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) { 
            if ($this->isNewRecord) {
                $this->date_added = date('Y-m-d H:i:s');
            }
            return true;
        }
        return false;
    }

    public function getPregnancy($by = "week")
    {
        if ($by == "week") {
            $dateToday = new DateTime();
            $startOfPregnancy = new DateTime($this->start_of_pregnancy);


            return floor($dateToday->diff($startOfPregnancy)->days/7);

        }
    }
}
