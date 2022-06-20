<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areagroup */

$this->title = 'Update Areagroup: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Areagroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areagroup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
