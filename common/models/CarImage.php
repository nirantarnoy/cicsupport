<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_image".
 *
 * @property int $id
 * @property int|null $car_id
 * @property string|null $image
 * @property int|null $status
 */
class CarImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_id', 'status'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_id' => 'Car ID',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
