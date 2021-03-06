<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class Inspectionteam extends \common\models\InspectionTeam {
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
    public function findName($team_id){
        $model= \common\models\InspectionTeam::find()->where(['id'=>$team_id])->one();
        return $model!=null?$model->name:'';
    }
    public function findHead($team_id){
        $headname = '';
        $model= \common\models\InspectionTeamAssign::find()->where(['team_id'=>$team_id,'is_head'=>1])->one();
        if($model){
            $headname = \backend\models\Employee::findEmpFullNameFromPerson($model->user_id);
        }
        return $headname;
    }
    public function findHeadId($team_id){
        $head_id = 0;
        $model= \common\models\InspectionTeamAssign::find()->where(['team_id'=>$team_id,'is_head'=>1])->one();
        if($model){
            $head_id = $model->user_id;
        }
        return $head_id;
    }
}