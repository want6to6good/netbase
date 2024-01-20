<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "board".
 *
 * @property int $id
 * @property string $content
 * @property string $date
 */
class Board extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    /** 
    *这个方法返回与该模型类关联的数据库表名。
    *在这个例子中，它关联到 board 表。
    */
    public static function tableName()
    {
        return 'board';
    }

    /**
     * {@inheritdoc}
     */
    /**
     * 这个方法定义了数据验证规则。
     * 它确保 content 和 date 字段在保存到数据库前是必填的。
     */
    public function rules()
    {
        return [
            [['content', 'date'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    /**
     * 这个方法返回属性的标签，主要用于 UI 显示。
     * 它指定 id 属性的标签是 "ID"，content 的标签是 "Content"，而 date 的标签是 "Date"。
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }
}
