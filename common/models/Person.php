<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $prs_no
 * @property string|null $idcard
 * @property int|null $department_id
 * @property int|null $section_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'section_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['fname', 'lname', 'prs_no', 'idcard'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'prs_no' => 'Prs No',
            'idcard' => 'Idcard',
            'department_id' => 'Department ID',
            'section_id' => 'Section ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
