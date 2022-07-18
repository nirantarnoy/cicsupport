<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areagroup */

$this->title = 'สร้างกลุ่มพื้นที่';
$this->params['breadcrumbs'][] = ['label' => 'Areagroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areagroup-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
