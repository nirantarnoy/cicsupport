<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areagroup */

$this->title = 'แก้ไขกลุ่มพื้นที่: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Areagroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areagroup-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
