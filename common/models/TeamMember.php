<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team_member".
 *
 * @property int $id
 * @property int|null $person_id
 * @property int|null $status
 */
class TeamMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team_member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_id' => 'Person ID',
            'status' => 'Status',
        ];
    }
}
