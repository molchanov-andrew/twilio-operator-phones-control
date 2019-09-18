<?php

namespace app\models;

use app\models\Phones;


/**
 * This is the model class for table "operators".
 *
 * @property int $operator_id
 * @property string $name
 * @property string $country
 * @property string $email
 * @property string $password
 */
class Operators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country', 'email', 'password'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'operator_id' => 'Operator ID',
            'name' => 'Name',
            'country' => 'Country',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
    
    public function getPhone() {
        return $this->hasMany(Phones::class, ['operator_id' => 'operator_id']);
    }
}
