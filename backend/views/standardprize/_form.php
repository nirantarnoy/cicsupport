<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Standardprize */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="standardprize-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_prize')->textInput() ?>

    <div class="row">
        <div class="col-lg-4">
            <label for="">สถานะ</label> <br />
            <!--            <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-purple-d1 text-grey-m2" checked />-->
            <input type="checkbox" class="ace-switch input-lg ace-switch-bars bgc-success-d2" checked />
        </div>
    </div>



    <?=$form->field($model, 'status')->hiddenInput(['class'=>'area-status'])->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
