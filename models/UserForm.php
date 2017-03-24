<?php

namespace app\models;

use yii\base\Model;
use app\models\User;

/**
 * User form
 */
class UserForm extends Model
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $dob;
    public $gender;
    public $username;
    public $password;
    public $password_repeat;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return
            [
                [['first_name', 'last_name', 'dob', 'username', 'password', 'password_repeat'], 'required'],

                ['first_name', 'trim'],
                ['first_name', 'string', 'max' => 255],

                ['middle_name', 'trim'],
                ['middle_name', 'string', 'max' => 255],

                ['last_name', 'trim'],
                ['last_name', 'string', 'max' => 255],

                ['dob', 'date', 'format' => 'php:Y-m-d', 'message' => 'Date should be of the format YYYY-MM-DD.'],

                ['gender', 'string', 'max' => 1],

                ['username', 'trim'],
                ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already been taken.'],
                ['username', 'string', 'min' => 6, 'max' => 255],

                ['password', 'string', 'min' => 6, 'max' => 40],
                ['password_repeat', 'string', 'min' => 6, 'max' => 40],
                ['password', 'compare'],
            ];
    }

    public function attributeLabels()
    {
        return
            [
                'dob' => 'Date of Birth',
            ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function create()
    {
        if (!$this->validate())
        {
            return null;
        }

        $user = new User();
        $user->first_name = $this->first_name;
        $user->middle_name = $this->middle_name;
        $user->last_name = $this->last_name;
        $user->dob = \DateTime::createFromFormat('Y-m-d', $this->dob)->format('Y-m-d');
        $user->gender = $this->gender;
        $user->username = $this->username;
        $user->password = $this->password;

        return $user->save() ? $user : null;
    }
}