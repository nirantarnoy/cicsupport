<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%person}}`.
 */
class m220720_085746_add_is_5s_enable_column_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%person}}', 'is_5s_enable', $this->integer());
        $this->addColumn('{{%person}}', 'is_safety_enable', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%person}}', 'is_5s_enable');
        $this->dropColumn('{{%person}}', 'is_safety_enable');
    }
}
