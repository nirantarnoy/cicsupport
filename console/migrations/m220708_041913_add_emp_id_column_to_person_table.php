<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%person}}`.
 */
class m220708_041913_add_emp_id_column_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%person}}', 'emp_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%person}}', 'emp_id');
    }
}
