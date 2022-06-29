<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectiontopic */

$this->title = 'แก้ไขหัวข้อตรวจ: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Inspectiontopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inspectiontopic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
