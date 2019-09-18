<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_user}}`.
 */
class m190910_082758_create_tbl_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tbl_user}}', [
            'id' => $this->primaryKey(),
            'phone' =>$this->string(255)->notNull()->comment('phone number'),
            'otp' =>$this->string(255)->defaultValue(null)->comment('Random One Time Password generated'),
            'otp_expire' =>$this->integer(11)->defaultValue(null)->comment('OTP Expire time in unix timestamp format'),
            'auth_key' =>$this->string(255)->notNull()->comment('will be used by Yii 2 auth system'),
            'created_on' =>$this->integer(11)->comment('Registration time in unix timestamp format'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tbl_user}}');
    }
}
