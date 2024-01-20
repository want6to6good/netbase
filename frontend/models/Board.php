<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "board".
 *
 * @property int $id 序号
 * @property string $content 留言内容
 * @property string $date 留言日期
 */
class Board extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'board';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'date'], 'required'], // 确保content和date字段不能为空
            [['content'], 'string'], // content字段是字符串类型
            [['date'], 'safe'], // date字段是安全的日期格式
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'content' => '留言内容',
            'date' => '留言日期',
        ];
    }
}

