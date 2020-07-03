<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%notification}}".
 *
 * @property int $id
 * @property int $user_id
 * @property string $description
 * @property string $date_time
 * @property int $status
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%notification}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'description', 'date_time', 'status'], 'required'],
            [['user_id', 'status'], 'integer'],
            [['description'], 'string'],
            [['date_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'description' => 'Description',
            'date_time' => 'Date Time',
            'status' => 'Status',
        ];
    }
}
