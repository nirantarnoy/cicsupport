<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areadef */

$this->title = 'แก้ไขพื้นที่ตรวจ: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Areadefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areadef-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
