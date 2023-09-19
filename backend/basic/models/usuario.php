<?php

namespace app\models;

use Yii;
/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string|null $password
 * @property string|null $authkey
 * @property string|null $accesstoken
 */
class usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'name'], 'required'],
            [['username', 'name'], 'string', 'max' => 80],
            [['password', 'authkey', 'accesstoken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'accesstoken' => 'Accesstoken',
        ];
    }
}
