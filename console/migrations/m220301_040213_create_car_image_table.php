<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_image}}`.
 */
class m220301_040213_create_car_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_image}}', [
            'id' => $this->primaryKey(),
            'car_id' => $this->integer(),
            'image' => $this->string(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car_image}}');
    }
}
