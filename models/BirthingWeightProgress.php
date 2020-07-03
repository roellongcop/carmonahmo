<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%birthing_weight_progress}}".
 *
 * @property int $id
 * @property int $birthing_id
 * @property string $date
 * @property string $weight
 * @property int $status
 */
class BirthingWeightProgress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%birthing_weight_progress}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthing_id', 'weight'], 'required'],
            [['birthing_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['weight'], 'string', 'max' => 32],
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
            'date' => 'Date (Petsa)',
            'weight' => 'Weight (Bigat | Kg)',
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
                $this->date = isset($this->date) ? $this->date : date('Y-m-d H:i:s');

            }
            return true;
        }
        return false;
    }
}
