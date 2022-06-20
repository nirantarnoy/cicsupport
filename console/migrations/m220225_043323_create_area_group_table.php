<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%area_group}}`.
 */
class m220225_043323_create_area_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area_group}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
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
        $this->dropTable('{{%area_group}}');
    }
}
