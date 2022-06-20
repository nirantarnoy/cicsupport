<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inspection_topic}}`.
 */
class m220225_035922_create_inspection_topic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inspection_topic}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'status' => $this->integer(),
            'seq_sort' => $this->integer(),
            'module_type_id' => $this->integer(),
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
        $this->dropTable('{{%inspection_topic}}');
    }
}
