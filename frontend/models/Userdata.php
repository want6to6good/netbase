<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * model
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "userdata".
 *
 * @property string $name
 * @property string $selfsign
 */
class Userdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'selfsign'], 'required'],
            [['selfsign'], 'string'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => '用户名',
            'selfsign' => '个人签名',
        ];
    }
}
