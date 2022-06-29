<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectiontopicitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspectiontopicitem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_id')->textInput() ?>

    <?= $form->field($model, 'activity_type_id')->textInput() ?>

    <?= $form->field($model, 'seq_sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
