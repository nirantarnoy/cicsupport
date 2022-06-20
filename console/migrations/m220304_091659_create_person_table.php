<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 */
class m220304_091659_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id' => $this->primaryKey(),
            'fname' => $this->string(),
            'lname' => $this->string(),
            'prs_no' => $this->string(),
            'idcard' => $this->string(),
            'department_id' => $this->integer(),
            'section_id' => $this->integer(),
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
        $this->dropTable('{{%person}}');
    }
}
