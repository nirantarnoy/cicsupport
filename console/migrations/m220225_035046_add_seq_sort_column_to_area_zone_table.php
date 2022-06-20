<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%area_zone}}`.
 */
class m220225_035046_add_seq_sort_column_to_area_zone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%area_zone}}', 'seq_sort', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%area_zone}}', 'seq_sort');
    }
}
