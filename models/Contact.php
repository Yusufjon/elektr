<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['name', 'email', 'message'], 'required'],
            [['message'], 'string'],
            [['name', 'email'], 'required'],
            [['name', 'email'],'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Исмингиз',
            'email' => 'Тел рақамингиз',
            'message' => 'Хабар мазмуни',
            'Save'=>'Жўнатиш',
        ];
    }
}
