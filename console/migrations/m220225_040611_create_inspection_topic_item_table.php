<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inspection_topic_item}}`.
 */
class m220225_040611_create_inspection_topic_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inspection_topic_item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'topic_id' => $this->integer(),
            'activity_type_id' => $this->integer(),
            'seq_sort' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_at' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inspection_topic_item}}');
    }
}
