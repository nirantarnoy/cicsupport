<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%area_difinition}}`.
 */
class m220622_025700_add_is_cal_bonus_column_to_area_difinition_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%area_definition}}', 'is_cal_bonus', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%area_definition}}', 'is_cal_bonus');
    }
}
