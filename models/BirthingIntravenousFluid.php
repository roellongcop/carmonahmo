<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%birthing_intravenous_fluid}}".
 *
 * @property int $id
 * @property int $birthing_id
 * @property string $date
 * @property int $bag_no
 * @property string $solution
 * @property string $blood
 * @property string $time_started
 * @property string $time_end
 * @property string $remarks
 * @property int $status
 */
class BirthingIntravenousFluid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%birthing_intravenous_fluid}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthing_id', 'bag_no', 'solution', 'blood', 'time_started', 'time_end', 'remarks'], 'required'],
            [['birthing_id', 'bag_no', 'status'], 'integer'],
            [['date', 'time_started', 'time_end'], 'safe'],
            [['remarks'], 'string'],
            [['solution', 'blood'], 'string', 'max' => 256],
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
            'bag_no' => 'Bag No',
            'solution' => 'Solution (Solusyon)',
            'blood' => 'Blood (Dugo)',
            'time_started' => 'Time Started (Oras nagumpisa)',
            'time_end' => 'Time End (Oras nagtapos)',
            'remarks' => 'Remarks (Mga Komento)',
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

    public function getstartTime()
    {
        return date('H:i:s A', strtotime($this->time_started));
    }

    public function getendTime()
    {
        return date('H:i:s A', strtotime($this->time_end));
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
