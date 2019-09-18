<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_twilio}}`.
 */
class m190911_072614_create_tbl_twilio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tbl_twilio}}', [
            'id' => $this->primaryKey(),
            'phone'=>$this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tbl_twilio}}');
    }
}
