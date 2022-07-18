<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areazone */

$this->title = 'แก้ไขโซนพื้นที่: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Areazones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areazone-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
