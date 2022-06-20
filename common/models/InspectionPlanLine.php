<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inspection_plan_line".
 *
 * @property int $id
 * @property int|null $inspection_plan_id
 * @property int|null $team_id
 * @property int|null $inspection_area_id
 * @property int|null $status
 */
class InspectionPlanLine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inspection_plan_line';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inspection_plan_id', 'team_id', 'inspection_area_id', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inspection_plan_id' => 'Inspection Plan ID',
            'team_id' => 'Team ID',
            'inspection_area_id' => 'Inspection Area ID',
            'status' => 'Status',
        ];
    }
}
