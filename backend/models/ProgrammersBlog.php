<?php

namespace backend\models;

/**
 * This is the model class for table "programmers_blog".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $author_name
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class ProgrammersBlog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programmers_blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['author_name', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'author_name' => 'Имя автора',
            'title' => 'Титулка',
            'description' => 'Описание',
            'created_at' => 'Created At',
        ];
    }
}
