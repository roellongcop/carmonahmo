<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hematology}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $staff_id
 * @property string $hemoglobin
 * @property string $hematocrit
 * @property string $leokocyte
 * @property string $erythrocyte
 * @property string $reticulocyte
 * @property string $platelet
 * @property string $esr
 * @property string $bleeding_time
 * @property string $clotting_time
 * @property string $bands
 * @property string $segmenters
 * @property string $eosinophil
 * @property string $basophil
 * @property string $lymphocytes
 * @property string $monocytes
 * @property string $nucleated_rbc
 * @property string $malarial_smear
 * @property string $toxic_granulation
 * @property string $blood_rh_type
 * @property string $others
 * @property int $status
 */
class Hematology extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hematology}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'staff_id', 'hemoglobin', 'hematocrit', 'leokocyte', 'erythrocyte', 'reticulocyte', 'platelet', 'esr', 'bleeding_time', 'clotting_time', 'bands', 'segmenters', 'eosinophil', 'basophil', 'lymphocytes', 'monocytes', 'nucleated_rbc', 'malarial_smear', 'toxic_granulation', 'blood_rh_type', 'others', 'pathologist_id'], 'required'],
            [['patient_id', 'staff_id', 'status', 'pathologist_id'], 'integer'],
            [['date_created'], 'safe'],
            [['toxic_granulation', 'blood_rh_type', 'others'], 'string'],
            [['hemoglobin', 'hematocrit', 'leokocyte', 'erythrocyte', 'reticulocyte', 'platelet', 'esr', 'bleeding_time', 'clotting_time', 'bands', 'segmenters', 'eosinophil', 'basophil', 'lymphocytes', 'monocytes'], 'string', 'max' => 32],
            [['nucleated_rbc', 'malarial_smear'], 'string', 'max' => 64],
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
            'hemoglobin' => 'Hemoglobin',
            'hematocrit' => 'Hematocrit',
            'leokocyte' => 'Leokocyte',
            'erythrocyte' => 'Erythrocyte',
            'reticulocyte' => 'Reticulocyte',
            'platelet' => 'Platelet',
            'esr' => 'Esr',
            'bleeding_time' => 'Bleeding Time',
            'clotting_time' => 'Clotting Time',
            'bands' => 'Bands',
            'segmenters' => 'Segmenters',
            'eosinophil' => 'Eosinophil',
            'basophil' => 'Basophil',
            'lymphocytes' => 'Lymphocytes',
            'monocytes' => 'Monocytes',
            'nucleated_rbc' => 'Nucleated Rbc',
            'malarial_smear' => 'Malarial Smear',
            'toxic_granulation' => 'Toxic Granulation',
            'blood_rh_type' => 'Blood Rh Type',
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
