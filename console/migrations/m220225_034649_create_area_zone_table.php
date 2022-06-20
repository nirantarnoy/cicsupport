<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%area_zone}}`.
 */
class m220225_034649_create_area_zone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area_zone}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(),
            'name' => $this->string(),
            'description' => $this->string(),
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
        $this->dropTable('{{%area_zone}}');
    }
}
