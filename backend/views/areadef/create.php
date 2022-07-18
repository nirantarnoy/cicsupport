<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areadef */

$this->title = 'พื้นที่ตรวจ';
$this->params['breadcrumbs'][] = ['label' => 'Areadefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areadef-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
