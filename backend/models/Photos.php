<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $url
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'title', 'url'], 'required'],
            [['title'], 'string'],
            [['date', 'url'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'url' => 'Url',
        ];
    }
}