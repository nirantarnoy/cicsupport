<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inspection_team_assign}}`.
 */
class m220301_045003_create_inspection_team_assign_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inspection_team_assign}}', [
            'id' => $this->primaryKey(),
            'team_id' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inspection_team_assign}}');
    }
}
