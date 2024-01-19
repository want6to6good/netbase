<?php

namespace frontend\models;

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
            [['content', 'date'], 'required'],
            [['content'], 'string'],
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
            'content' => '留言内容',
            'date' => '留言日期',
        ];
    }
}
