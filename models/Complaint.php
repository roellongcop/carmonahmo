<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%complaint}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $department
 * @property int $status
 */
class Complaint extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%complaint}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'department'], 'required'],
            [['description', 'department'], 'string'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 128], 
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'department' => 'Department',
            'status' => 'Status',
        ];
    }


    public function getDepartmentList()
    {
        $ul = '';

        if ($this->department && is_array(json_decode($this->department, true))) {
            $departments = json_decode($this->department, true);
            
            $ul = '<ul>';
            foreach ($departments as $id) {
                $ul .= '<li>'. ucwords(Department::findOne($id)->name) .'</li>';
            }
            $ul .= '<ul>';
        }
        return $ul;
    }
}
