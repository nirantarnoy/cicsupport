<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%team_member}}`.
 */
class m220622_061257_create_team_member_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%team_member}}', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%team_member}}');
    }
}
