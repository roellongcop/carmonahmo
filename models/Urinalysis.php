<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%urinalysis}}".
 *
 * @property int $id
 * @property int $patient_id
 * @property int $staff_id
 * @property string $color
 * @property string $reaction
 * @property string $transparency
 * @property string $specific_gravity
 * @property string $albumin
 * @property string $sugar
 * @property string $ketone
 * @property string $amorphus_urates
 * @property string $amorphus_phosphates
 * @property string $calcium_oxalates
 * @property string $uric_acid
 * @property string $triple_phosphates
 * @property string $hyaline
 * @property string $fine_granular
 * @property string $coarse_granular
 * @property string $wbc_casts
 * @property string $rbc_casts
 * @property string $waxy
 * @property string $pus_cells
 * @property string $red_blood_cells
 * @property string $ephithelial_cells
 * @property string $yeast_cells
 * @property string $renal_ephithelial_cells
 * @property string $mocous_threads
 * @property string $bacteria
 * @property string $pregnancy_test
 * @property int $pathologist_id
 * @property int $status
 */
class Urinalysis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%urinalysis}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'staff_id', 'color', 'reaction', 'transparency', 'specific_gravity', 'albumin', 'sugar', 'ketone', 'amorphus_urates', 'amorphus_phosphates', 'calcium_oxalates', 'uric_acid', 'triple_phosphates', 'hyaline', 'fine_granular', 'coarse_granular', 'wbc_casts', 'rbc_casts', 'waxy', 'pus_cells', 'red_blood_cells', 'ephithelial_cells', 'yeast_cells', 'renal_ephithelial_cells', 'mocous_threads', 'bacteria', 'pregnancy_test', 'pathologist_id'], 'required'],
            [['patient_id', 'staff_id', 'pathologist_id', 'status'], 'integer'],
            [['bacteria'], 'string'],
            [['date_created'], 'safe'],
            [['color', 'reaction', 'transparency', 'specific_gravity', 'albumin', 'sugar', 'ketone', 'amorphus_urates', 'amorphus_phosphates', 'calcium_oxalates', 'uric_acid', 'triple_phosphates', 'hyaline', 'fine_granular', 'coarse_granular', 'wbc_casts', 'rbc_casts', 'waxy', 'pus_cells', 'red_blood_cells', 'ephithelial_cells', 'yeast_cells', 'renal_ephithelial_cells', 'mocous_threads', 'pregnancy_test'], 'string', 'max' => 256],
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
            'patient_id' => 'Patient ',
            'staff_id' => 'Requested By',
            'color' => 'Color',
            'reaction' => 'Reaction',
            'transparency' => 'Transparency',
            'specific_gravity' => 'Specific Gravity',
            'albumin' => 'Albumin',
            'sugar' => 'Sugar',
            'ketone' => 'Ketone',
            'amorphus_urates' => 'Amorphus Urates',
            'amorphus_phosphates' => 'Amorphus Phosphates',
            'calcium_oxalates' => 'Calcium Oxalates',
            'uric_acid' => 'Uric Acid',
            'triple_phosphates' => 'Triple Phosphates',
            'hyaline' => 'Hyaline',
            'fine_granular' => 'Fine Granular',
            'coarse_granular' => 'Coarse Granular',
            'wbc_casts' => 'Wbc Casts',
            'rbc_casts' => 'Rbc Casts',
            'waxy' => 'Waxy',
            'pus_cells' => 'Pus Cells',
            'red_blood_cells' => 'Red Blood Cells',
            'ephithelial_cells' => 'Ephithelial Cells',
            'yeast_cells' => 'Yeast Cells',
            'renal_ephithelial_cells' => 'Renal Ephithelial Cells',
            'mocous_threads' => 'Mocous Threads',
            'bacteria' => 'Bacteria',
            'pregnancy_test' => 'Pregnancy Test',
            'pathologist_id' => 'Pathologist',
            'status' => 'Status',
            'date_created' => 'Date',
            'path' => 'Pathologist',
            'fdate' => 'Assessment Date',
            'label' => 'Status',
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
