<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property string $username
 * @property int $valume
 * @property string $name
 * @property string $color
 *
 * @property User $username0
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valume', 'name', 'color'], 'required'],
            [['valume'], 'integer'],
            [['username'], 'string', 'max' => 20],
            [['name', 'color'], 'string', 'max' => 30],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['username' => 'username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Клиент',
            'valume' => 'Объем двигателя',
            'name' => 'Название',
            'color' => 'Цвет',
        ];
    }

    /**
     * Gets query for [[Username0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(User::class, ['username' => 'username']);
    }
}
