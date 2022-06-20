<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areazone */

$this->title = 'Create Areazone';
$this->params['breadcrumbs'][] = ['label' => 'Areazones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areazone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
