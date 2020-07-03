<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%dental}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $date
 * @property string $chief_complaint
 * @property string $medical_history
 * @property string $dental_history
 * @property string $treatment
 * @property string $diagnosis
 * @property string $oral_condition
 * @property string $dental_health
 */
class Dental extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dental}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['chief_complaint', 'medical_history', 'dental_history', 'treatment', 'diagnosis', 'oral_condition', 'dental_health'], 'string'],
            [['oral_condition', 'dental_health'], 'required'],
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
            'date' => 'Date',
            'chief_complaint' => 'Chief Complaint',
            'medical_history' => 'Medical History',
            'dental_history' => 'Dental History',
            'treatment' => 'Treatment',
            'diagnosis' => 'Diagnosis',
            'oral_condition' => 'Oral Condition',
            'dental_health' => 'Dental Health',
            'status' => 'Status',
        ];
    }

    public function getLabel()
    {
        return Yii::$app->params['status'][$this->status];
    }

    public function getPatient()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    public function getPatientName()
    {
        return ucwords($this->patient->name);
    }

    public function getFdate()
    {
        return date('F d, Y', strtotime($this->date));
    }

    public function getAssessmentDate()
    {
        return date('F d, Y', strtotime($this->date));
    }

    public function getComplaint()
    {
        return $this->processArray($this->chief_complaint);
    }

    public function getDental()
    {
        return $this->processArray($this->dental_history);
    }

    public function getMedical()
    {
        return $this->processArray($this->medical_history);
    }

    protected function processArray($array)
    {
        return str_replace(['[', ']', '"'], '', $array);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) { 
            if ($this->isNewRecord) {
                $this->date = isset($this->date) ? $this->date : date('Y-m-d H:i:s');
            }
            return true;
        }
        return false;
    }
}
