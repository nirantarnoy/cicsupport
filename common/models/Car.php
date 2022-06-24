<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string|null $doc_no
 * @property string|null $trans_date
 * @property int|null $area_id
 * @property int|null $car_type_id
 * @property string|null $car_desc
 * @property int|null $is_new
 * @property int|null $case_type
 * @property string|null $preventive_desc
 * @property string|null $target_finish_date
 * @property int|null $responsibility
 * @property int|null $status
 * @property string|null $note
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['trans_date', 'target_finish_date'], 'safe'],
            [['area_id', 'car_type_id', 'is_new', 'case_type', 'responsibility', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['doc_no', 'car_desc', 'preventive_desc', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doc_no' => 'Doc No',
            'trans_date' => 'Trans Date',
            'area_id' => 'Area ID',
            'car_type_id' => 'Car Type ID',
            'car_desc' => 'Car Desc',
            'is_new' => 'Is New',
            'case_type' => 'Case Type',
            'preventive_desc' => 'Preventive Desc',
            'target_finish_date' => 'Target Finish Date',
            'responsibility' => 'Responsibility',
            'status' => 'Status',
            'note' => 'Note',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
