<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%birthing_monitoring_sheet}}".
 *
 * @property int $id
 * @property int $birthing_id
 * @property string $date
 * @property string $blood_pressure
 * @property string $pulse
 * @property string $respiration
 * @property string $urine_output
 * @property string $cvp_level
 * @property string $others
 * @property int $status
 */
class BirthingMonitoringSheet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%birthing_monitoring_sheet}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthing_id', 'blood_pressure', 'pulse', 'respiration', 'urine_output', 'cvp_level'], 'required'],
            [['birthing_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['others'], 'string'],
            [['blood_pressure', 'pulse', 'respiration', 'cvp_level'], 'string', 'max' => 32],
            [['urine_output'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'birthing_id' => 'Birthing ID',
            'date' => 'Date',
            'blood_pressure' => 'Blood Pressure (Presyon ng Dugo)',
            'pulse' => 'Pulse (Pulso)',
            'respiration' => 'Respiration (Paghinga)',
            'urine_output' => 'Urine Output (Ihi)',
            'cvp_level' => 'Cvp Level (Antas nang CVP)',
            'others' => 'Others (Iba pa)',
            'status' => 'Status',
            'patient' => 'Patient Name',
            'fdate' => 'Date Recorded',
            'label' => 'Status',
        ];
    }

    public function getLabel()
    {
        return Yii::$app->params['status'][$this->status];
    }

    public function getFdate()
    {
        return date('F d, Y', strtotime($this->date));
    }

    public function getBirthing()
    {
        return $this->hasOne(Birthing::className(), ['id' => 'birthing_id']);
    }

    public function getPatient()
    {
        return $this->birthing->patient;
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) { 
            if ($this->isNewRecord) {
                $this->date = date('Y-m-d H:i:s');
            }
            return true;
        }
        return false;
    }
}
