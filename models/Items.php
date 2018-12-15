<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id_item
 * @property string $name_item
 * @property string $img_item
 * @property int $cost_item
 * @property string $stats_item
 * @property string $about_item
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_item', 'img_item', 'cost_item', 'stats_item', 'about_item'], 'required'],
            [['img_item', 'stats_item', 'about_item'], 'string'],
            [['cost_item'], 'integer'],
            [['name_item'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_item' => 'Id Item',
            'name_item' => 'Name Item',
            'img_item' => 'Img Item',
            'cost_item' => 'Cost Item',
            'stats_item' => 'Stats Item',
            'about_item' => 'About Item',
        ];
    }

    public function getItems(){
      return static::find()->all();
    }
}
