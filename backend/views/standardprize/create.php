<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Standardprize */

$this->title = 'Create Standardprize';
$this->params['breadcrumbs'][] = ['label' => 'Standardprizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standardprize-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
