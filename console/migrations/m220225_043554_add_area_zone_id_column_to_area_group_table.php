<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%area_group}}`.
 */
class m220225_043554_add_area_zone_id_column_to_area_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%area_group}}', 'area_zone_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%area_group}}', 'area_zone_id');
    }
}
