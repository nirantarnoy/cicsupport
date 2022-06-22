<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class Areadef extends \common\models\AreaDefinition {
    public function behaviors()
    {
        return [
            'timestampcdate'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>'created_at',
                ],
                'value'=> time(),
            ],
            'timestampudate'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_UPDATE=>'updated_at',
                ],
                'value'=> time(),
            ],
            'timestampcby'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>'created_by',
                ],
                'value'=> \Yii::$app->user->identity->id,
            ],
            'timestamuby'=>[
                'class'=> \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_UPDATE=>'updated_by',
                ],
                'value'=> \Yii::$app->user->identity->id,
            ],

        ];
    }
    public static function findName($id){
        $model = Areadef::find()->where(['id'=>$id])->one();
        return $model !=null?$model->name:'';
    }
    public static function findId($name){
        $model = Areadef::find()->where(['name'=>$name])->one();
        return $model !=null?$model->id:0;
    }
}