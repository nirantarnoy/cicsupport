<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AreazoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Areazones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areazone-index">

    <div class="row">
        <div class="col-lg-6"> <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="text-align: right;">
            <p>
                <?= Html::a('Create Area', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

        </div>
    </div>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',
            'code',
            'name',
            'description',
            'status',
            'seq_sort',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
