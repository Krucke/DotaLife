<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id_new
 * @property string $title_new
 * @property string $img_new
 * @property string $date_create
 * @property string $pre_text
 * @property string $full_text
 * @property int $rated
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_new', 'img_new', 'date_create', 'pre_text', 'full_text', 'rated'], 'required'],
            [['img_new', 'full_text'], 'string'],
            [['date_create'], 'safe'],
            [['rated'], 'integer'],
            [['title_new'], 'string', 'max' => 100],
            [['pre_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_new' => 'Id New',
            'title_new' => 'Title New',
            'img_new' => 'Img New',
            'date_create' => 'Date Create',
            'pre_text' => 'Pre Text',
            'full_text' => 'Full Text',
            'rated' => 'Rated',
        ];
    }

    public function getNews(){

      return static::find()->all();
    }

    public function getRated(){

      return $command = Yii::$app->db->createCommand("SELECT * FROM news ORDER BY rated DESC LIMIT 3")->query();
    }

    public function getLatest(){

      return $command = Yii::$app->db->createCommand("SELECT * FROM news ORDER BY id_new DESC LIMIT 3")->query();
    }
}
