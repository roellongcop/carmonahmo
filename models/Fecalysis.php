<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%fecalysis}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $staff_id
 * @property string $color
 * @property string $consistency
 * @property string $pus_cells
 * @property string $red_cells
 * @property string $fat_globules
 * @property string $yeast_cells
 * @property string $bateria
 * @property string $starch_granules
 * @property string $muscle_fiber
 * @property string $vegetable_cells
 * @property string $parasite
 * @property string $amoeba
 * @property string $others
 * @property int $status
 */
class Fecalysis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fecalysis}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'staff_id', 'color', 'consistency', 'pus_cells', 'red_cells', 'fat_globules', 'yeast_cells', 'bateria', 'starch_granules', 'muscle_fiber', 'vegetable_cells', 'parasite', 'amoeba', 'pathologist_id'], 'required'],
            [['patient_id', 'staff_id', 'status', 'pathologist_id'], 'integer'],
            [['date_created'], 'safe'],
            [['parasite', 'amoeba', 'others'], 'string'],
            [['color', 'consistency', 'pus_cells', 'red_cells', 'fat_globules', 'yeast_cells', 'bateria', 'starch_granules', 'muscle_fiber', 'vegetable_cells'], 'string', 'max' => 256],
            [['status'], 'default', 'value' => 1],
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
            'staff_id' => 'Requested By',
            'color' => 'Color',
            'consistency' => 'Consistency',
            'pus_cells' => 'Pus Cells',
            'red_cells' => 'Red Cells',
            'fat_globules' => 'Fat Globules',
            'yeast_cells' => 'Yeast Cells',
            'bateria' => 'Bateria',
            'starch_granules' => 'Starch Granules',
            'muscle_fiber' => 'Muscle Fiber',
            'vegetable_cells' => 'Vegetable Cells',
            'parasite' => 'Parasite',
            'amoeba' => 'Amoeba',
            'others' => 'Others',
            'status' => 'Status',
            'date_created' => 'Date',
            'path' => 'Pathologist',
            'fdate' => 'Assessment Date',
            'label' => 'Status',
            'pathologist_id' => 'Pathologist',
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

    public function getRequest()
    {
        return $this->hasOne(User::className(), ['id' => 'staff_id']);
    }

    public function getDoctor()
    {
        return $this->hasOne(User::className(), ['id' => 'pathologist_id']);
    }

    public function getPath()
    {
        return ucwords($this->doctor->name);
    }

    public function getPatient()
    {
        return ucwords($this->user->name);
    }

    public function getStaff()
    {
        return ucwords($this->request->name);
    }

    public function getFdate()
    {
        return date('F d, Y', strtotime($this->date_created));
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
