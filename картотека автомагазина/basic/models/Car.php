<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string $name
 * @property int $valume
 * @property string $date_published
 * @property string $color
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'valume', 'date_published', 'color'], 'required'],
            [['valume'], 'integer'],
            [['date_published'], 'safe'],
            [['name', 'color'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'valume' => 'Объем двигателя',
            'date_published' => 'Дата выпуска',
            'color' => 'Цвет',
        ];
    }
}
