<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_twilio".
 *
 * @property int $id
 * @property string $phone
 */
class Twilio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_twilio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
        ];
    }
}
