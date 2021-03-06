<?php

namespace backend\controllers;

use backend\models\Area;
use backend\models\AreaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AreaController implements the CRUD actions for Area model.
 */
class AreaController extends Controller
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
     * Lists all Area models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AreaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Area model.
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
     * Creates a new Area model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Area();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $group_id_new = \Yii::$app->request->post('area_group_id_new');
                $std_prize_id_new = \Yii::$app->request->post('std_prize_id_new');
                $module_use = \Yii::$app->request->post('module_use');


                $model->area_group_id = $group_id_new;
                $model->std_prize_id = $std_prize_id_new;
                if($model->save(false)){
                    if(count($module_use)>0){
                        for($i=0;$i<=count($module_use)-1;$i++){
                            $model_module = new \common\models\AreaModuleCheck();
                            $model_module->area_id = $model->id;
                            $model_module->module_id = $module_use[$i];
                            $model_module->save(false);
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
     * Updates an existing Area model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_area_module = \common\models\AreaModuleCheck::find()->where(['area_id'=>$id])->all();
        $data = [];
        foreach ($model_area_module as $x){
            array_push($data, $x->module_id);
        }

        if ($this->request->isPost && $model->load($this->request->post())) {
            $group_id_new = \Yii::$app->request->post('area_group_id_new');
            $std_prize_id_new = \Yii::$app->request->post('std_prize_id_new');
            $module_use = \Yii::$app->request->post('module_use');

            $model->area_group_id = $group_id_new;
            $model->std_prize_id = $std_prize_id_new;
            if($model->save(false)){
                if(count($module_use)>0){
                    \common\models\AreaModuleCheck::deleteAll(['area_id'=>$model->id]);
                    for($i=0;$i<=count($module_use)-1;$i++){
                        $model_module = new \common\models\AreaModuleCheck();
                        $model_module->area_id = $model->id;
                        $model_module->module_id = $module_use[$i];
                        $model_module->save(false);
                    }
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'model_area_module'=> $data
        ]);
    }

    /**
     * Deletes an existing Area model.
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
     * Finds the Area model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Area the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Area::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
