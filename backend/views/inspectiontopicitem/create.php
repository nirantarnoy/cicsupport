<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectiontopicitem */

$this->title = 'สร้างรายละเอียดการตรวจ';
$this->params['breadcrumbs'][] = ['label' => 'Inspectiontopicitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectiontopicitem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
