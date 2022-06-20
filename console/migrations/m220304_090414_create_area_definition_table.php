<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%area_definition}}`.
 */
class m220304_090414_create_area_definition_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area_definition}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'sort_seq' => $this->integer(),
            'area_group_id' => $this->integer(),
            'area_id' => $this->integer(),
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
        $this->dropTable('{{%area_definition}}');
    }
}
