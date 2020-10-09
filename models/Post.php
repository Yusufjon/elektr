<?php

namespace app\models;
use app\models\Post;
use Yii;


/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }


public function model(){
    $model=POST::model()->findAll();

}

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'description' => 'Mazmuni',
        ];
    }
}
