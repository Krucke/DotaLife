<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $author_id
 * @property string $message
 * @property int $new_id
 * @property string $date_com
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'message', 'new_id', 'date_com'], 'required'],
            [['author_id', 'new_id'], 'integer'],
            [['date_com'], 'safe'],
            [['message'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'author_id' => 'Author ID',
            'message' => 'Message',
            'new_id' => 'New ID',
            'date_com' => 'Date Com',
        ];
    }
}
