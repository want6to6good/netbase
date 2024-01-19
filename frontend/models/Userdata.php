<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userdata".
 *
 * @property string $name
 * @property string $selfsign
 */
class Userdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'selfsign'], 'required'],
            [['selfsign'], 'string'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'selfsign' => 'Selfsign',
        ];
    }
}
