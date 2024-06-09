<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property int $id
 * @property string $email
 * @property string $create_at
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email'
        ];
    }
}
