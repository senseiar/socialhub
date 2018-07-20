<?php

use yii\db\Migration;

/**
 * Class m180720_101327_post_table
 */
class m180720_101327_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post_table', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'filename' => $this->string()->notNull(),
            'description' => $this->text(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post_table');
    }

}
