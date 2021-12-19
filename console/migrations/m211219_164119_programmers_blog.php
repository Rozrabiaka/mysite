<?php

use yii\db\Migration;

/**
 * Class m211219_164119_blog
 */
class m211219_164119_programmers_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%programmers_blog}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->null(), //может быть null, т.к пользователи не зарегестрированные могут оставлять свои описания
            'author_name' => $this->string(255)->null(), // author name if this coming from frontend not logined user
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'created_at' => $this->dateTime()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultValue(null),
        ], $tableOptions);
    }
}
