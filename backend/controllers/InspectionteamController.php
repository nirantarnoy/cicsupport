<?php

namespace backend\controllers;

use backend\models\Inspectionteam;
use backend\models\InspectionteamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InspectionteamController implements the CRUD actions for Inspectionteam model.
 */
class InspectionteamController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Inspectionteam models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InspectionteamSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inspectionteam model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Inspectionteam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Inspectionteam();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $module_type_id = \Yii::$app->request->post('module_type_id');
                $line_person_id = \Yii::$app->request->post('line_person_id');
                $line_person_status = \Yii::$app->request->post('line_person_status');

                $model->module_type_id = $module_type_id;
                if ($model->save()) {
                    if(count($line_person_id)){
                        for($i=0;$i<=count($line_person_id)-1;$i++){
                            $model_line = new \common\models\InspectionTeamAssign();
                            $model_line->team_id = $model->id;
                            $model_line->user_id = $line_person_id[$i];
                            $model_line->status = $line_person_status[$i];
                            $model_line->save(false);
                        }
                    }
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Inspectionteam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelline = \common\models\InspectionTeamAssign::find()->where(['team_id'=>$id])->all();

        if ($this->request->isPost && $model->load($this->request->post())) {
            $removelist = \Yii::$app->request->post('removelist');
            $line_person_id = \Yii::$app->request->post('line_person_id');
            $line_person_status = \Yii::$app->request->post('line_person_status');
            $line_ishead_status = \Yii::$app->request->post('line_ishead_status');

            if($model->save()){
                if(count($line_person_id)){
                    for($i=0;$i<=count($line_person_id)-1;$i++){
                        $check_model = \common\models\InspectionTeamAssign::find()->where(['user_id'=>$line_person_id[$i]])->one();
                        if($check_model){
                            $check_model->status = $line_person_status[$i];
                            $check_model->is_head = $line_ishead_status[$i];
                            $check_model->save(false);
                        }else{
                            $model_line = new \common\models\InspectionTeamAssign();
                            $model_line->team_id = $model->id;
                            $model_line->user_id = $line_person_id[$i];
                            $model_line->status = $line_person_status[$i];
                            $model_line->is_head = $line_ishead_status[$i];
                            $model_line->save(false);
                        }

                    }
                }
                $ex = explode(',',$removelist);
                if(count($ex)>0){
                    \common\models\InspectionTeamAssign::deleteAll(['id'=>$ex]);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }

        return $this->render('update', [
            'model' => $model,
            'modelline'=>$modelline,
        ]);
    }

    /**
     * Deletes an existing Inspectionteam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Inspectionteam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Inspectionteam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Inspectionteam::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
