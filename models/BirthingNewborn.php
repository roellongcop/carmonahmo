<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%birthing_newborn}}".
 *
 * @property int $id
 * @property int $birthing_id
 * @property string $baby_name
 * @property string $date_delivered
 * @property string $time_delivered
 * @property int $gender
 * @property int $delivery_type
 * @property string $weight
 * @property string $apgar_score
 * @property string $head_circumference
 * @property string $abdominal_circumference
 * @property string $chest_circumference
 * @property string $body_length
 * @property string $procedures
 * @property string $medications
 * @property string $remarks
 * @property int $status
 */
class BirthingNewborn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%birthing_newborn}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthing_id', 'baby_name', 'date_delivered', 'time_delivered', 'gender', 'delivery_type', 'weight', 'apgar_score', 'head_circumference', 'abdominal_circumference', 'chest_circumference', 'body_length', 'procedures', 'medications', 'remarks'], 'required'],
            [['birthing_id', 'status', 'delivery_type', 'gender'], 'integer'],
            [['date_delivered', 'time_delivered'], 'safe'],
            [['procedures', 'medications', 'remarks'], 'string'],
            [['baby_name'], 'string', 'max' => 128],
            [['weight', 'apgar_score', 'head_circumference', 'abdominal_circumference', 'chest_circumference', 'body_length'], 'string', 'max' => 32],
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
            'baby_name' => 'Baby Name (Pangalan ng Sanggol)',
            'date_delivered' => 'Date Delivered (Petsa ng Panganganak)',
            'time_delivered' => 'Time Delivered (Oras nang Panganganak)',
            'gender' => 'Gender (Kasarian)',
            'delivery_type' => 'Delivery Type (Uri ng Panganganak)',
            'weight' => 'Weight (Bigat Kg)',
            'apgar_score' => 'Apgar Score (Katuusan ng Apgar)',
            'head_circumference' => 'Head Circumference (Sukat ng Ulo)',
            'abdominal_circumference' => 'Abdominal Circumference (Sukat ng Puson)',
            'chest_circumference' => 'Chest Circumference (Sukat ng Dibdib)',
            'body_length' => 'Body Length (Haba ng Katawan)',
            'procedures' => 'Procedures (Pamamaraan)',
            'medications' => 'Medications (Mga gamot | Mediko)',
            'remarks' => 'Remarks (Mga Komento)',
            'status' => 'Status',
            'patient' => 'Patient Name', 
        ];
    }

    public function getLabel()
    {
        return Yii::$app->params['status'][$this->status];
    }

    public function getBirthing()
    {
        return $this->hasOne(Birthing::className(), ['id' => 'birthing_id']);
    }

    public function getDelDate()
    {
        return date('F d, Y', strtotime($this->date_delivered));
    }

    public function getDelTime()
    {
        return date('H:i:s A', strtotime($this->time_delivered));
    }

    public function getSex()
    {
        return Yii::$app->params['gender'][$this->gender];
    }


    public function getDelivery()
    {
        return Yii::$app->params['delivery_type'][$this->delivery_type];
    }

    public function getPatient()
    {
        return $this->birthing->patient;
    }

   
}
