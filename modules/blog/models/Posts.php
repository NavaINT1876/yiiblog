<?php

namespace app\modules\blog\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $text_preview
 * @property string $img
 */
class Posts extends \yii\db\ActiveRecord
{
    public $image;
    public $filename;
    public $string;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'text_preview'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['text_preview'], 'string', 'max' => 250],
            [['img'], 'file', 'maxFiles' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'text_preview' => 'Text Preview',
            'img' => 'Img',
        ];
    }
}
