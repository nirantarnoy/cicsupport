<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inspection_plan".
 *
 * @property int $id
 * @property string|null $plan_no
 * @property int|null $module_type_id
 * @property string|null $plan_target_date
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property int|null $inspection_type_id
 */
class InspectionPlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inspection_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_type_id', 'status', 'created_by', 'created_at', 'updated_at', 'updated_by', 'inspection_type_id'], 'integer'],
            [['plan_target_date'], 'safe'],
            [['plan_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_no' => 'Plan No',
            'module_type_id' => 'Module Type ID',
            'plan_target_date' => 'Plan Target Date',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'inspection_type_id' => 'Inspection Type ID',
        ];
    }
}
