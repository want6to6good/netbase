<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240120
 * 用户登录记录
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "Loginlog".
 *
 * @property int $id
 * @property string $content
 * @property string $date
 */
class Loginlog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Loginlog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date'], 'required'],
            [['name'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '登录用户',
            'date' => '登陆日期',
        ];
    }
}
