<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectiontopic */

$this->title = 'สร้างหัวข้อตรวจ';
$this->params['breadcrumbs'][] = ['label' => 'Inspectiontopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectiontopic-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
