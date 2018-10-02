<?php

use yii\db\Migration;

/**
 * Class m181002_075158_user_admin_insert
 */
class m181002_075158_user_admin_insert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user',
            [
                'id' => 1,
                'username' =>  'admin',
                'email' => 'admin@admin.ru',
                'password_hash' => '$2y$12$Qj1MzU/j3OFeTLb5U.d4veVIRHdmzYovEaH4F58wXQujXVGdjcV7u',
                'auth_key' => '$2y$12$E3NBtaTvpLo1EzUQtLTlJuZon',
                'confirmed_at' => '1459498710',
                'created_at' => '1459498710',
                'updated_at' => '1459498710',
                'flags' => 0,
                'type_profile' => 1,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181002_075158_user_admin_insert cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181002_075158_user_admin_insert cannot be reverted.\n";

        return false;
    }
    */
}
