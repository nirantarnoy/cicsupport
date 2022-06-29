<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inspection_topic_item".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $topic_id
 * @property int|null $activity_type_id
 * @property int|null $seq_sort
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class InspectionTopicItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inspection_topic_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['topic_id', 'activity_type_id', 'seq_sort', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
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
            'name' => 'ชื่อ',
            'topic_id' => 'ห้วข้อการตรวจ',
            'activity_type_id' => 'ประเภทกิจกรรม',
            'seq_sort' => 'ลำดับการแสดง',
            'status' => 'สถานะ',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
