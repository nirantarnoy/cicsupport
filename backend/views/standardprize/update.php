<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Standardprize */

$this->title = 'Update Standardprize: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Standardprizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="standardprize-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
