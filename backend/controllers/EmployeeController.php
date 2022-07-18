<?php

namespace backend\controllers;

use backend\models\Employee;
use backend\models\EmployeeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmployeeController implements the CRUD actions for Employee model.
 */
class EmployeeController extends Controller
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
     * Lists all Employee models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EmployeeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Employee model.
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
     * Creates a new Employee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Employee();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Employee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Employee model.
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
     * Finds the Employee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Employee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Employee::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSyncdata(){
        $model_p = \common\models\QryEmpInfoEmpAll::find()->where(['PRI_STATUS'=>1])->andFilterWhere(['NOT IN','DEPT_CODE_Dept',[70, 74]])->all();
        if($model_p){
            foreach ($model_p as $value){
                $model_check = \backend\models\Employee::find()->where(['emp_key'=>$value->EMP_KEY])->one();
                if($model_check) {
                    $model_check->fname = $value->EMP_NAME;
                    $model_check->lname = $value->EMP_SURNME;
                    $model_check->emp_code = $value->PRS_NO;
                    $model_check->department_id = $this->finDept($value->SecName);
                    $model_check->save(false);
                }else{
                    $model = new \backend\models\Employee();
                    $model->emp_key = $value->EMP_KEY;
                    $model->emp_code = $value->PRS_NO;
                    $model->fname = $value->EMP_NAME;
                    $model->lname = $value->EMP_SURNME;
                    $model->department_id = $this->finDept($value->SecName);
                    $model->status = 1;
                    $model->save(false);
                }

            }
        }
        return $this->redirect(['employee/index']);
    }

    public function finDept($deptname){
        $dept_id = 0;
        if($deptname != ''){
            $model = \backend\models\Department::find()->where(['name'=>$deptname])->one();
            if($model){
                $dept_id = $model->id;
            }else{
                $model_new = new \backend\models\Department();
                $model_new->name = $deptname;
                $model_new->status = 1;
                if($model_new->save(false)){
                    $dept_id = $model_new->id;
                }
            }

        }
        return $dept_id;
    }
}
