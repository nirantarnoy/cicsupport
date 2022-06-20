<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inspection_setting}}`.
 */
class m220301_042034_create_inspection_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inspection_setting}}', [
            'id' => $this->primaryKey(),
            'area_id' => $this->integer(),
            'module_type_id' => $this->integer(),
            'topic_id' => $this->integer(),
            'topic_item' => $this->integer(),
            'is_inspection' => $this->integer(),
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
        $this->dropTable('{{%inspection_setting}}');
    }
}
