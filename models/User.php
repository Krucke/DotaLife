<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
* This is the model class for table "user".
*
* @property int $id
* @property string $username
* @property string $password
* @property string $auth_key
*/
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'users';
}

public static function findIdentity($id) {

return static::findOne($id);
}

public static function findIdentityByAccessToken($token, $type = null) {

return static::findOne(['access_token' => $token]);
}

public function getId() {

return $this->id_user;
}

public function getAuthKey(){

return $this->auth_key;
}

public function validateAuthKey($authKey) {

return $this->getAuthKey() === $authKey;
}
public function findByUsername($username){

return static::findOne(['username' => $username]);
}

public function validatePassword($password){

return $this->password === $password;
}

// public function isLoginUnique($username){
//
// $user = static::findOne(['username' => $username]);
// $user = new User();
// $user->username = 'yeis';
// $user->password = 'sas';
// $user->save();
// }
}
