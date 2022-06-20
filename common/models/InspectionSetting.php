<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inspection_setting".
 *
 * @property int $id
 * @property int|null $area_id
 * @property int|null $module_type_id
 * @property int|null $topic_id
 * @property int|null $topic_item
 * @property int|null $is_inspection
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class InspectionSetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inspection_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_id', 'module_type_id', 'topic_id', 'topic_item', 'is_inspection', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_id' => 'Area ID',
            'module_type_id' => 'Module Type ID',
            'topic_id' => 'Topic ID',
            'topic_item' => 'Topic Item',
            'is_inspection' => 'Is Inspection',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
