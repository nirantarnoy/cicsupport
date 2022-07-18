<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Areazone */

$this->title = 'สร้างเขตพื้นที่';
$this->params['breadcrumbs'][] = ['label' => 'Areazones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areazone-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
