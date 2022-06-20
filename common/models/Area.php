<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $area_group_id
 * @property int|null $std_prize_id
 * @property int|null $seq_sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_group_id', 'std_prize_id', 'seq_sort', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
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
            'area_group_id' => 'Area Group ID',
            'std_prize_id' => 'Std Prize ID',
            'seq_sort' => 'Seq Sort',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
