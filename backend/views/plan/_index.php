<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
$this->title = 'แผนตรวจ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">
    <div class="row">
        <div class="col-lg-6"> <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="text-align: right;">
            <p>
                <?= Html::a('Create Area', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

        </div>
    </div>

</div>
