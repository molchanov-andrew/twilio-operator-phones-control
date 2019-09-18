<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phoneNumbers".
 *
 * @property int $phoneNumber_id
 * @property string $phoneNumber
 * @property int $operator_id
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phoneNumbers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phoneNumber'], 'string'],
            [['operator_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phoneNumber_id' => 'Phone Number ID',
            'phoneNumber' => 'Phone Number',
            'operator_id' => 'Operator ID',
        ];
    }
}
