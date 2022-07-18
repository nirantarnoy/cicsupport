<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string|null $emp_code
 * @property int|null $emp_key
 * @property string|null $fname
 * @property string|null $lname
 * @property int|null $department_id
 * @property string|null $id_card_no
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_key', 'department_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['emp_code', 'fname', 'lname', 'id_card_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_code' => 'Emp Code',
            'emp_key' => 'Emp Key',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'department_id' => 'Department ID',
            'id_card_no' => 'Id Card No',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
