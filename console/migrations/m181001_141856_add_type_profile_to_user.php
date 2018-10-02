<?php

use yii\db\Migration;

/**
 * Class m181001_141856_add_type_profile_to_user
 */
class m181001_141856_add_type_profile_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'type_profile', $this->tinyInteger(1)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'type_profile');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181001_141856_add_type_profile_to_user cannot be reverted.\n";

        return false;
    }
    */
}
