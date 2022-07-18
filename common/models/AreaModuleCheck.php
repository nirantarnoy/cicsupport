<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "area_module_check".
 *
 * @property int $id
 * @property int|null $area_id
 * @property int|null $module_id
 */
class AreaModuleCheck extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_module_check';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_id', 'module_id'], 'integer'],
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
            'module_id' => 'Module ID',
        ];
    }
}
