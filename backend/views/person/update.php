<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Person */

$this->title = 'Update Person: ' . $model->ad_user;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ad_user, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="person-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
