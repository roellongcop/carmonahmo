<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%appointment}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $complaint_id
 * @property string $scheduled_date
 * @property string $description
 * @property int $status
 */
class Appointment extends \yii\db\ActiveRecord
{

    public $authkey;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appointment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complaint_id', 'scheduled_date', 'authkey', 'scheduled_time'], 'required'],
            [['user_id', 'complaint_id', 'status'], 'integer'],
            [['scheduled_date','scheduled_time', 'notified'], 'safe'],
            [['description'], 'string'],
            [['status', 'notified'], 'default', 'value' => 0],
            [['authkey'], 'validateUser',],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Patient ID',
            'complaint_id' => 'Complaint',
            'scheduled_date' => 'Scheduled Date',
            'description' => 'Description',
            'status' => 'Status',
            'authkey' => 'Verification Code'
        ];
    }

    public function getComplaint()
    {
        return $this->hasOne(Complaint::className(), ['id' => 'complaint_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


    public function validateUser($attribute, $params)
    {
        $user = User::findOne(['authkey' => $this->authkey]);
        if (! $user) {
            $this->addError($attribute, 'Verification Code Invalid');
        }
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) { 
            $this->scheduled_date = date('Y-m-d', strtotime($this->scheduled_date)); 
        }
        return true;
    }

    public function getPatientName()
    {
        if($this->user){
            
        
        return ucwords($this->user->name);
        
        
}
    }

    public function getLabel()
    {
        return '<label class="label label-'. Yii::$app->params['label_class'][$this->status] .'"> '. Yii::$app->params['appointment_status'][$this->status] .'</label>';
    }

    public function login($user)
    {
        if ($this->validate()) {
            return Yii::$app->user->login($user);
        }
        return false;
    }
}
