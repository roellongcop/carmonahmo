<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%activity}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $day
 * @property string $time
 * @property int $status
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%activity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'day', 'time', 'status'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['day', 'time'], 'string', 'max' => 32],
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
            'day' => 'Day',
            'time' => 'Time',
            'status' => 'Status',
        ];
    }
}
