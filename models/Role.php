<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%role}}".
 *
 * @property int $id
 * @property string $name
 * @property string $access
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%role}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'access',], 'required'],
            [['status'], 'integer'],
            [['status'], 'default', 'value' => 1],
            [['created_at', 'updated_at', 'status', 'access'], 'safe'],
            [['name'], 'string', 'max' => 32],
        ];
    }



    public function afterFind()
    {
        $this->access = json_decode($this->access, TRUE);

        return parent::afterFind();
    }

    public function beforeSave($insert)
    {
        $this->access = json_encode($this->access);

        return parent::beforeSave($insert);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'access' => 'access',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
