<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%inspection_team_assign}}`.
 */
class m220720_032718_add_is_head_column_to_inspection_team_assign_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%inspection_team_assign}}', 'is_head', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%inspection_team_assign}}', 'is_head');
    }
}
