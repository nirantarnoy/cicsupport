<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Area */

$this->title = 'สร้างพื้นที่';
$this->params['breadcrumbs'][] = ['label' => 'Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'model_area_module'=> null
    ]) ?>

</div>
