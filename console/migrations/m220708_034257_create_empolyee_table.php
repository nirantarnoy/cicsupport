<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%empolyee}}`.
 */
class m220708_034257_create_empolyee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%empolyee}}', [
            'id' => $this->primaryKey(),
            'emp_code' => $this->string(),
            'emp_key' => $this->integer(),
            'fname' => $this->string(),
            'lname' => $this->string(),
            'department_id' => $this->integer(),
            'id_card_no' => $this->string(),
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
        $this->dropTable('{{%empolyee}}');
    }
}
