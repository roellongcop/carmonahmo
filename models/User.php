<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $fullname
 * @property int $gender
 * @property int $age
 * @property string $birthday
 * @property string $address
 * @property int $educational_attainment
 * @property int $employment_status
 * @property int $civil_status
 * @property string $dswd_nhtsmember
 * @property int $family_household_number
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property string $access_token
 * @property int $user_type
 * @property int $status
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $blk;
    public $lot;
    public $brgy;
    public $city;
    public $province;

    public $update_type;
    public $email;
    public $fname;
    public $mname;
    public $lname;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'mname', 'lname', 'civil_status', 'birthday', 'age', 'employment_status', 'gender', 'educational_attainment', 'user_type'], 'required'],

            [['birthday','image_path', 'fname','mname', 'lname', 'email', ], 'safe'],
           
            
            [['email'], 'trim'],

            [['address', 'blk', 'lot', 'brgy', 'city', 'province'], 'string'],

            [['family_household_number', 'civil_status', 'employment_status', 'gender', 'educational_attainment', 'user_type', 'status', 'age', 'update_type'], 'integer'],

            [['fullname', 'dswd_nhtsmember', 'username', 'fname', 'mname', 'lname'], 'string', 'max' => 128],
 
 
            [['password', 'access_token'], 'string', 'max' => 256],
            [['authkey'], 'string', 'max' => 10],

            [['authkey', 'access_token', 'dswd_nhtsmember', 'family_household_number'], 'unique'],


        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'gender' => 'Sex',
            'age' => 'Age',
            'birthday' => 'Birthday',
            'address' => 'Address',
            'educational_attainment' => 'Educational Attainment',
            'employment_status' => 'Employment Status',
            'civil_status' => 'Civil Status',
            'dswd_nhtsmember' => 'DSWD NHTS member',
            'family_household_number' => 'Family Household Number',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Verification Code',
            'access_token' => 'Access Token',
            'user_type' => 'User Type',
            'status' => 'Status',
            'fname' => 'First Name',
            'mname' => 'Middle Name',
            'lname' => 'Last Name',

            'blk' => 'Blk',
            'lot' => 'Lot',
            'brgy' => 'Baranggay',
            'city' => 'City',
            'province' => 'Province',
        ];
    }


     /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }
        return null;
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        if (($model = User::findOne(['accessToken' => $token])) !== null) {
            return $model;
        }
        return null;
    }

     

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return User::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function getSex()
    {
        return Yii::$app->params['gender'][$this->gender];
    }

    public function getMedical()
    {
        return $this->hasMany(Medical::className(), ['patient_id' => 'id']);
    }

    public function getPhysical()
    {
        return $this->hasMany(Physical::className(), ['patient_id' => 'id']);
    }

    public function getDental()
    {
        return $this->hasMany(Dental::className(), ['patient_id' => 'id']);
    }

    public function getFecalysis()
    {
        return $this->hasMany(Fecalysis::className(), ['patient_id' => 'id']);
    }

    public function getHematology()
    {
        return $this->hasMany(Hematology::className(), ['patient_id' => 'id']);
    }

    public function getUrinalysis()
    {
        return $this->hasMany(Urinalysis::className(), ['patient_id' => 'id']);
    }
    
    public function getBirthing()
    {
        return $this->hasMany(Birthing::className(), ['patient_id' => 'id']);
    }
    
    public function getName()
    {
        return ucwords(str_replace("_", " ", $this->fullname));
    }
    
    
    public function get_address()
    {
        return 'Blk ' . $this->_blk. ' Lot ' . $this->_lot . ' ' . $this->_brgy .
        ' ' . $this->_city . ' ' . $this->_province;
        return ucwords(str_replace("_", " ", $this->address));
    }
    
    public function get_blk()
    {
        $address = explode("_", $this->address);
         
        
        return isset($address[0]) ? ucwords($address[0]): '';
    }
    
    public function get_lot()
    {
        $address = explode("_", $this->address);
         
        
        return isset($address[1]) ? ucwords($address[1]): '';
    }
    
    public function get_brgy()
    {
        $address = explode("_", $this->address);
         
        
        return isset($address[2]) ? ucwords($address[2]): '';
    }
    
    
    public function get_city()
    {
        $address = explode("_", $this->address);
         
        
        return isset($address[3]) ? ucwords($address[3]): '';
    }
    
    public function get_province()
    {
        $address = explode("_", $this->address);
         
        
        return isset($address[4]) ? ucwords($address[4]): '';
    }
    
    public function getFirstname()
    {
        $fullname = explode("_", $this->fullname);
         
        
        return isset($fullname[0]) ? $fullname[0]: '';
    }
    
    public function getMiddlename()
    {
        $fullname = explode("_", $this->fullname);
         
        return isset($fullname[1]) ? $fullname[1]: '';
    }
    
    public function getLastname()
    {
        $fullname = explode("_", $this->fullname);
        
        return isset($fullname[2]) ? $fullname[2]: '';
    }

    /**
     * Set password
     *
     */
    public function setPassword()
    {
        $this->password = Yii::$app->security->generatePasswordHash($this->password);
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['user_id' => 'id']);
    }

    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'user_type']);
    }

    public function createString($range = 10)
    {
        return Yii::$app->security->generateRandomString($range);
    }

    public function getEducation()
    {
        return Yii::$app->params['educational_attainment'][$this->educational_attainment];
    }

    public function getEmployment()
    {
        return Yii::$app->params['employment_status'][$this->employment_status];
    }

    public function getCivil()
    {
        return Yii::$app->params['civil_status'][$this->civil_status];
    }

    protected function isHash()
    {
        return (isset($this->update_type) && $this->update_type == 1);
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) { 
            if ($this->isNewRecord) {
                $this->user_type = $this->user_type ? $this->user_type : 0;
                $this->status = $this->status ? $this->status : 0;

                $this->password = $this->isHash() ? $this->password : 
                    Yii::$app->security->generatePasswordHash($this->password);

                $this->authkey = strtoupper($this->createString());
                $this->access_token = $this->createString();
            } 
            return true;
        }
        return false;
    }

    public function get_user_type()
    {
        if (($role = $this->role) != NULL) {
            return $role->name;
        }
        return '';
    }

    
}
