<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * model
 */
namespace frontend\models;

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
            [['id', 'date', 'title', 'url'], 'required'],
            [['id'], 'integer'],
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
            'id' => '序号',
            'date' => '日期',
            'title' => '标题',
            'url' => '链接',
        ];
    }
}
