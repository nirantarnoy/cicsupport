<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inspection_plan_line}}`.
 */
class m220304_035737_create_inspection_plan_line_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inspection_plan_line}}', [
            'id' => $this->primaryKey(),
            'inspection_plan_id' => $this->integer(),
            'team_id' => $this->integer(),
            'inspection_area_id' => $this->integer(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inspection_plan_line}}');
    }
}
