<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $sub_title
 * @property string|null $description
 * @property int|null $status
 * @property string|null $image
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['title', 'sub_title', 'description', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'description' => 'Description',
            'status' => 'Status',
            'image' => 'Image',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
