<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areagroup */

$this->title = 'Create Areagroup';
$this->params['breadcrumbs'][] = ['label' => 'Areagroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areagroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
