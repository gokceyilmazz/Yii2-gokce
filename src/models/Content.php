<?php

namespace gokceyilmazz\content\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $body
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','body'],'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ödev no',
            'name' => 'Ders',
            'body' => 'Ödev Açıklaması',
            'created_at' => 'Veriliş Tarihi',
            'updated_at' => 'Teslim Tarihi',
        ];
    }
}

