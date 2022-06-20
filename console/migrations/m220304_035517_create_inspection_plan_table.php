<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inspection_plan}}`.
 */
class m220304_035517_create_inspection_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inspection_plan}}', [
            'id' => $this->primaryKey(),
            'plan_no' => $this->string(),
            'module_type_id' => $this->integer(),
            'plan_target_date' => $this->datetime(),
            'status' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inspection_plan}}');
    }
}
