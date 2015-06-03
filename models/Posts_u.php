<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts_u".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_descritption
 * @property integer $author_id
 *
 * @property Users $author
 */
class Posts_u extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts_u';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'post_descritption', 'author_id'], 'required'],
            [['post_descritption'], 'string'],
            [['author_id'], 'integer'],
            [['post_title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_descritption' => 'Post Descritption',
            'author_id' => 'Author ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Users::className(), ['id' => 'author_id']);
    }
}
