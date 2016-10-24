<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $correoUsuario
 * @property string $nombreUsuario
 * @property string $password
 */
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['nombre', 'correoUsuario', 'username', 'password'], 'required'],
            [['nombre', 'apellido'], 'string', 'max' => 20],
            [['correoUsuario'], 'string', 'max' => 60],
            [['username', 'password'], 'string', 'max' => 15],
            [['nombreUsuario'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'correoUsuario' => 'Correo',
            'username' => 'Nombre de Usuario',
            'password' => 'Contraseña',
        ];
    }

    public function getAuthKey() {
        throw new \yii\base\NotSupportedException();
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey) {
        throw new \yii\base\NotSupportedException();
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException();
    }

    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }
    
    public function validatePassword($password){
        return $this->password == $password;
    }
}
