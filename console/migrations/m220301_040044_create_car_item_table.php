<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_item}}`.
 */
class m220301_040044_create_car_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_item}}', [
            'id' => $this->primaryKey(),
            'car_type_id' => $this->integer(),
            'title' => $this->string(),
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
        $this->dropTable('{{%car_item}}');
    }
}
