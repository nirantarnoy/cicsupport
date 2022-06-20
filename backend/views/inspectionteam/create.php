<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectionteam */

$this->title = 'Create Inspectionteam';
$this->params['breadcrumbs'][] = ['label' => 'Inspectionteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectionteam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
