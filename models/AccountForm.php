<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class AccountForm extends Model
{
    public $username;
    public $password;
    public $password_confirm;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'password_confirm'], 'required'],
            // rememberMe must be a boolean value
            // password is validated by validatePassword()
            [['password', 'password_confirm'], 'checkPassword'],
            [['password', 'password_confirm'], 'string', 'min' => 6],
        ];
    }



    public function checkPassword($attribute, $params)
    {
        if ($this->password_confirm != $this->password) {
            $this->addError($attribute, 'Password Not Match');
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
 
}
