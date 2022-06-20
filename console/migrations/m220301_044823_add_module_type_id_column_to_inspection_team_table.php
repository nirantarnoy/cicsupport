<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%inspection_team}}`.
 */
class m220301_044823_add_module_type_id_column_to_inspection_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%inspection_team}}', 'module_type_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%inspection_team}}', 'module_type_id');
    }
}
