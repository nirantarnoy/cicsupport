<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "standard_prize".
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $std_prize
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class StandardPrize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'standard_prize';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['std_prize'], 'number'],
            [['status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'std_prize' => 'Std Prize',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
