<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%area}}`.
 */
class m220225_043503_create_area_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'area_group_id' => $this->integer(),
            'std_prize_id' => $this->integer(),
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
        $this->dropTable('{{%area}}');
    }
}
