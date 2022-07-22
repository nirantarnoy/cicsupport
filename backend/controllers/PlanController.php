<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use stmswitcher\Yii2LdapAuth\Model\LdapUser;

/**
 * Site controller
 */
class PlanController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        $model = \common\models\InspectionPlan::find()->all();
        return $this->render('_index',[
            'model'=>$model,
        ]);
    }

    public function actionCreate()
    {
        return $this->render('_create');
    }

    public function actionGenplan()
    {
        $plan_month = \Yii::$app->request->post('plan_for_month');
        $plan_year = \Yii::$app->request->post('plan_for_year');
        $line_team_id = \Yii::$app->request->post('line_team_id');
        $line_areagroup_id = \Yii::$app->request->post('line_areagroup_id');

//        echo $plan_month;
//        echo $plan_year;

        if ($plan_month != null && $plan_year != null && $line_team_id != null) {
            for ($i = 0; $i <= count($line_team_id) - 1; $i++) {
                $model_plan = new \backend\models\Plan();
                $model_plan->plan_no = $model_plan::getLastNo();
                $model_plan->module_type_id = 1;
                $model_plan->plan_target_date = date('Y-m-d');
                $model_plan->inspection_type_id = 1; // normal
                $model_plan->team_id = $line_team_id[$i];
                $model_plan->team_head_id = \backend\models\Inspectionteam::findHeadId($line_team_id[$i]);
                $model_plan->inspection_area_id = $line_areagroup_id[$i];
                $model_plan->save(false);
            }
        }
        return $this->redirect(['plan/index']);
    }
}