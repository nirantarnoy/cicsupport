<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%person}}`.
 */
class m220305_060653_add_ad_user_column_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%person}}', 'ad_user', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%person}}', 'ad_user');
    }
}
