<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%standard_prize}}`.
 */
class m220225_040319_create_standard_prize_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%standard_prize}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'std_prize' => $this->float(),
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
        $this->dropTable('{{%standard_prize}}');
    }
}
