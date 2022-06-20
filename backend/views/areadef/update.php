<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areadef */

$this->title = 'Update Areadef: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Areadefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="areadef-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
