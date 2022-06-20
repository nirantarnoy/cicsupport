<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area_group".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $seq_sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property int|null $area_zone_id
 */
class AreaGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['seq_sort', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by', 'area_zone_id'], 'integer'],
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
            'seq_sort' => 'Seq Sort',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'area_zone_id' => 'Area Zone ID',
        ];
    }
}
