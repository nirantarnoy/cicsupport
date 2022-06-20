<?php

use yii\db\Migration;

/**
 * Class m220301_063726_add_department_id_to_area_table
 */
class m220301_063726_add_department_id_to_area_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220301_063726_add_department_id_to_area_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220301_063726_add_department_id_to_area_table cannot be reverted.\n";

        return false;
    }
    */
}
