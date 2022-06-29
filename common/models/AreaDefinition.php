<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area_definition".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $sort_seq
 * @property int|null $area_group_id
 * @property int|null $area_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class AreaDefinition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_definition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort_seq', 'area_group_id', 'area_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by','is_cal_bonus'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ',
            'description' => 'รายละเอียด',
            'sort_seq' => 'ลำดับการแสดง',
            'area_group_id' => 'กลุ่มพท้นที่',
            'area_id' => 'พื้นที่',
            'status' => 'สถานะ',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'is_cal_bonus' => 'คำนวณแตะเอีย',
        ];
    }
}
