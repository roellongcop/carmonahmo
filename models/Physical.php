<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%physical}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $occupation
 * @property string $diagnosis
 * @property string $date
 * @property string $time
 * @property string $bp
 * @property string $pr
 * @property string $rr
 * @property string $temp
 * @property string $wt
 * @property int $status
 */
class Physical extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%physical}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'occupation', 'diagnosis', 'date', 'time', 'bp', 'pr', 'rr', 'temp', 'wt'], 'required'],
            [['patient_id', 'status'], 'integer'],
            [['status'], 'default', 'value' => 1],
            [['diagnosis'], 'string'],
            [['date', 'time'], 'safe'],
            [['occupation'], 'string', 'max' => 256],
            [['bp', 'pr', 'rr', 'temp', 'wt'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient',
            'occupation' => 'Occupation',
            'diagnosis' => 'Diagnosis',
            'date' => 'Date',
            'time' => 'Time',
            'bp' => 'Bp',
            'pr' => 'Pr',
            'rr' => 'Rr',
            'temp' => 'Temp',
            'wt' => 'Wt',
            'status' => 'Status',
            'dateTime' => 'Assessment Date',
            'patient' => 'Patient',
            'label' => 'Status'
        ];
    }

    public function getLabel()
    {
        return Yii::$app->params['status'][$this->status];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'patient_id']);
    }

    public function getPatient()
    {
        return ucwords($this->user->name);
    }

    public function getDateTime()
    {
        return date('F d, Y', strtotime($this->date)). ' ' .date('H:i:s A', strtotime($this->time));
    }
}
