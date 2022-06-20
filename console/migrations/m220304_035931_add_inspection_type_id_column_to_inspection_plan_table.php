<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%inspection_plan}}`.
 */
class m220304_035931_add_inspection_type_id_column_to_inspection_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%inspection_plan}}', 'inspection_type_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%inspection_plan}}', 'inspection_type_id');
    }
}
