<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * model
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contect".
 *
 * @property int $id 序号
 * @property string $name 名字
 * @property string $mail 邮箱地址
 * @property string $content 内容
 */
class Contect extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contect';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mail', 'content'], 'required'], // name、mail和content字段不能为空
            [['content'], 'string'], // content字段为字符串类型
            [['name', 'mail'], 'string', 'max' => 32], // name和mail字段为最大长度为32的字符串类型
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '名字',
            'mail' => '邮箱地址',
            'content' => '内容',
        ];
    }
}

