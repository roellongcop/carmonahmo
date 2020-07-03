<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%birthing_assessment}}".
 *
 * @property int $id
 * @property int $birthing_id
 * @property string $date
 * @property string $assessment
 * @property string $chief_complaint
 * @property string $intervention
 * @property int $status
 */
class BirthingAssessment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%birthing_assessment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthing_id', 'assessment', 'chief_complaint', 'intervention'], 'required'],
            [['birthing_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['assessment', 'chief_complaint', 'intervention'], 'string'],
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
            'assessment' => 'Assessment (Asesment | Mga Pag-uulat)',
            'chief_complaint' => 'Chief Complaint (Punong Reklamo)',
            'intervention' => 'Intervention (Interbensyon)',
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
