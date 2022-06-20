<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Car */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doc_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trans_date')->textInput() ?>

    <?= $form->field($model, 'area_id')->textInput() ?>

    <?= $form->field($model, 'car_type_id')->textInput() ?>

    <?= $form->field($model, 'car_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_new')->textInput() ?>

    <?= $form->field($model, 'case_type')->textInput() ?>

    <?= $form->field($model, 'preventive_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target_finish_date')->textInput() ?>

    <?= $form->field($model, 'responsibility')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
