<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'doc_no') ?>

    <?= $form->field($model, 'trans_date') ?>

    <?= $form->field($model, 'area_id') ?>

    <?= $form->field($model, 'car_type_id') ?>

    <?php // echo $form->field($model, 'car_desc') ?>

    <?php // echo $form->field($model, 'is_new') ?>

    <?php // echo $form->field($model, 'case_type') ?>

    <?php // echo $form->field($model, 'preventive_desc') ?>

    <?php // echo $form->field($model, 'target_finish_date') ?>

    <?php // echo $form->field($model, 'responsibility') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
