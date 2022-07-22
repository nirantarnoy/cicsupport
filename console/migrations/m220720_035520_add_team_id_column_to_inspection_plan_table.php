<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%inspection_plan}}`.
 */
class m220720_035520_add_team_id_column_to_inspection_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%inspection_plan}}', 'team_id', $this->integer());
        $this->addColumn('{{%inspection_plan}}', 'inspection_area_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%inspection_plan}}', 'team_id');
        $this->dropColumn('{{%inspection_plan}}', 'inspection_area_id');
    }
}
