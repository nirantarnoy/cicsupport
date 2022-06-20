<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectiontopic */

$this->title = 'Create Inspectiontopic';
$this->params['breadcrumbs'][] = ['label' => 'Inspectiontopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectiontopic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>