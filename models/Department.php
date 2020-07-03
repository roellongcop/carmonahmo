<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%department}}".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property int $status
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%department}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'description'], 'required'],
            [['user_id', 'status'], 'integer'],
            [['description'], 'string'],
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
            'user_id' => 'Incharge',
            'name' => 'Department Name',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }


    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getStaff()
    {
        return ucwords($this->user->fullname);
    }
}
