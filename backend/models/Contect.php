<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contect".
 *
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property string $content
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
            [['name', 'mail', 'content'], 'required'],
            [['content'], 'string'],
            [['name', 'mail'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mail' => 'Mail',
            'content' => 'Content',
        ];
    }
}
