<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class Employee extends \common\models\Employee{
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
    public function findEmpCode($emp_id){
        $model = \backend\models\Employee::find()->where(['id'=>$emp_id])->one();
        return $model !=null?$model->emp_code:'';
    }
    public function findEmpFullName($emp_id){
        $model = \backend\models\Employee::find()->where(['id'=>$emp_id])->one();
        return $model !=null?$model->fname.' '.$model->lname:'';
    }
    public function findEmpFullNameFromPerson($person_id){
        $emp_id = 0;
        $model_per = \backend\models\Person::find()->where(['id'=>$person_id])->one();
        if($model_per){
            $emp_id = $model_per->emp_id;
        }
        $model = \backend\models\Employee::find()->where(['id'=>$emp_id])->one();
        return $model !=null?$model->fname.' '.$model->lname:'';
    }
}