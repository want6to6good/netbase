<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * model
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "loginlog".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 */
class Loginlog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loginlog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date'], 'required'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '用户名',
            'date' => '登陆时间',
        ];
    }
}
