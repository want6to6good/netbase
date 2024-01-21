<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * model
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $url
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'title', 'url'], 'required'],
            [['date', 'title', 'url'], 'string', 'max' => 32],
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
