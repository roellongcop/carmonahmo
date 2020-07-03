<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%medical}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $assessment_date
 * @property string $chief_complaint
 * @property string $primary_diagnosis
 * @property string $clinical_history
 * @property string $other_diagnosis
 * @property string $treatment
 * @property string $date_created
 * @property int $status
 */
class Medical extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%medical}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id'], 'integer'],
            [['status'], 'default', 'value' => 1],
            [['assessment_date', 'date_created'], 'safe'],
            [['chief_complaint', 'clinical_history', 'other_diagnosis', 'treatment'], 'string'],
            [['treatment', 'chief_complaint', 'primary_diagnosis'], 'required'],
            [['primary_diagnosis'], 'string', 'max' => 256],
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
            'assessment_date' => 'Assessment Date',
            'chief_complaint' => 'Chief Complaint',
            'primary_diagnosis' => 'Primary Diagnosis',
            'clinical_history' => 'Clinical History',
            'other_diagnosis' => 'Other Diagnosis',
            'treatment' => 'Treatment',
            'date_created' => 'Date',
            'status' => 'Status',
            'fdate' => 'Assessment Date',
            'addedOn' => 'Date Reserved',
        ];
    }


    public function getPatient()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    public function getFdate()
    {
        return date('F d, Y', strtotime($this->assessment_date));
    }

    public function getAddedOn()
    {
        return date('F d, Y', strtotime($this->date_created));
    }

    public function getPatientName()
    {
        return ucwords($this->patient->name);
    }

    

    public function getLabel()
    {
        return Yii::$app->params['status'][$this->status];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) { 
            if ($this->isNewRecord) {
                $this->date_created = isset($this->date_created) ? $this->date_created : date('Y-m-d H:i:s');
            }
            return true;
        }
        return false;
    }
}
