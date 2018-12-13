<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "heroes".
 *
 * @property int $id_hero
 * @property string $img_hero
 * @property string $name_hero
 * @property int $strength
 * @property int $agility
 * @property int $intelect
 * @property int $attack
 * @property int $movespeed
 * @property int $assault
 * @property string $story
 */
class Heroes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'heroes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img_hero', 'name_hero', 'strength', 'agility', 'intelect', 'attack', 'movespeed', 'assault', 'story'], 'required'],
            [['strength', 'agility', 'intelect', 'attack', 'movespeed', 'assault'], 'integer'],
            [['story'], 'string'],
            [['img_hero'], 'string', 'max' => 200],
            [['name_hero'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hero' => 'Id Hero',
            'img_hero' => 'Img Hero',
            'name_hero' => 'Name Hero',
            'strength' => 'Strength',
            'agility' => 'Agility',
            'intelect' => 'Intelect',
            'attack' => 'Attack',
            'movespeed' => 'Movespeed',
            'assault' => 'Assault',
            'story' => 'Story',
        ];
    }

    public function getHeroesS(){
      return static::find()->where(['attribute_id' => 1])->all();
    }

    public function getHeroesA(){
      return static::find()->where(['attribute_id' => 2])->all();
    }

    public function getHeroesI(){
      return static::find()->where(['attribute_id' => 3])->all();
    }
}
