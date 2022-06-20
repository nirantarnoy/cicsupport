<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car}}`.
 */
class m220301_035912_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car}}', [
            'id' => $this->primaryKey(),
            'doc_no' => $this->string(),
            'trans_date' => $this->datetime(),
            'area_id' => $this->integer(),
            'car_type_id' => $this->integer(),
            'car_desc' => $this->string(),
            'is_new' => $this->integer(),
            'case_type' => $this->integer(),
            'preventive_desc' => $this->string(),
            'target_finish_date' => $this->datetime(),
            'responsibility' => $this->integer(),
            'status' => $this->integer(),
            'note' => $this->string(),
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
        $this->dropTable('{{%car}}');
    }
}
