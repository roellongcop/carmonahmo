<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dots_opd_record".
 *
 * @property int $id
 * @property int $dots_id
 * @property string $date
 * @property string $bp
 * @property string $wt
 * @property string $pr
 * @property string $rr
 * @property string $t
 * @property string $S
 * @property string $O
 * @property string $A
 * @property string $P
 * @property string $smoking_hx
 */
class DotsOpdRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hmo_dots_opd_record';   
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['S', 'O', 'A', 'P', 'smoking_hx','bp', 'wt', 'pr', 'rr', 't'], 'required'],
            [['dots_id'], 'integer'],
            [['date'], 'safe'],
            [['S', 'O', 'A', 'P', 'smoking_hx'], 'string'],
            [['bp', 'wt', 'pr', 'rr', 't'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dots_id' => 'Dots ID',
            'date' => 'Date',
            'bp' => 'Bp',
            'wt' => 'Wt',
            'pr' => 'Pr',
            'rr' => 'Rr',
            't' => 'T',
            'S' => 'S',
            'O' => 'O',
            'A' => 'A',
            'P' => 'P',
            'smoking_hx' => 'Smoking Hx',
        ];
    }



        public function getDots()
    {
        return $this->hasOne(Dots::className(), ['id' => 'dots_id']);
    }

    public function getPatient()
    {
        return $this->dots->patient;
    }

    public function getSmoking()
    {
         return $this->processArray($this->smoking_hx);
    }

      protected function processArray($array)
    {
        return str_replace(['[', ']', '"'], '', $array);
    }
}
