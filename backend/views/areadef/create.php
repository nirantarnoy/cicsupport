<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areadef */

$this->title = 'Create Areadef';
$this->params['breadcrumbs'][] = ['label' => 'Areadefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areadef-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
