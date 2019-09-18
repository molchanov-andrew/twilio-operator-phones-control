<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phoneNumbers}}`.
 */
class m190904_054238_create_phoneNumbers_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%phoneNumbers}}', [
            'phoneNumber_id' => $this->primaryKey(),
            'phoneNumber' => $this->text(),
            'operator_id' => $this->integer(),
        ]);
//        $this->addForeignKey(
//                'keyForOperators',
//                'phoneNumbers',
//                'operatorId',
//                'operators',
//                'id',
//                'CASCADE'
//        );
//        // Добавляем foreign key
//        $this->addForeignKey(
//            'goodId',  // это "условное имя" ключа
//            'images', // это название текущей таблицы
//            'goodId', // это имя поля в текущей таблице, которое будет ключом
//            'goods', // это имя таблицы, с которой хотим связаться
//            'id', // это поле таблицы, с которым хотим связаться
//            'CASCADE'
//        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%phoneNumbers}}');
    }

}
