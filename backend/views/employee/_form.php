<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_key')->textInput() ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'id_card_no')->textInput(['maxlength' => true]) ?>

    <label for="">สถานะ</label> <br/>
    <!--            <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-purple-d1 text-grey-m2" checked />-->
    <?php
    $checked = '';
    if ($model->status == 1) {
        $checked = 'checked';
    }
    ?>
    <input type="checkbox" class="ace-switch input-lg ace-switch-bars bgc-success-d2"
           onclick="changestatus($(this))" <?= $checked ?>/>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
