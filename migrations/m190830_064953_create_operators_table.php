<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%operators}}`.
 */
class m190830_064953_create_operators_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%operators}}', [
            'operator_id' => $this->primaryKey(),
            'name' => $this->text(),
            'country' => $this->text(),
            'email' => $this->text(),
            'password'=> $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%operators}}');
    }
}
