<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id_user
 * @property string $lastname
 * @property string $firstname
 * @property string $date_birth
 * @property string $img_profile
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $about
 * @property int $auth_key
 * @property int $isadmin
 * @property string $date_sign
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_birth', 'date_sign'], 'safe'],
            [['img_profile', 'about'], 'string'],
            [['username', 'password', 'auth_key', 'isadmin', 'date_sign'], 'required'],
            [['auth_key', 'isadmin'], 'integer'],
            [['lastname', 'firstname', 'email'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'date_birth' => 'Date Birth',
            'img_profile' => 'Img Profile',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'about' => 'About',
            'auth_key' => 'Auth Key',
            'isadmin' => 'Isadmin',
            'date_sign' => 'Date Sign',
        ];
    }
}
