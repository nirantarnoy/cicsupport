<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%area_module_check}}`.
 */
class m220718_034529_create_area_module_check_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%area_module_check}}', [
            'id' => $this->primaryKey(),
            'area_id' => $this->integer(),
            'module_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%area_module_check}}');
    }
}
