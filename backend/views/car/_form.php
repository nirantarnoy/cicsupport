<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Car */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="car-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'doc_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'trans_date')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'area_id')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'car_type_id')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $form->field($model, 'car_desc')->textarea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'is_new')->textInput() ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'case_type')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $form->field($model, 'preventive_desc')->textarea(['maxlength' => true]) ?>
        </div>
    </div>

   <div class="row">
       <div class="col-lg-4">
           <?= $form->field($model, 'target_finish_date')->textInput() ?>
       </div>
       <div class="col-lg-4">
           <?= $form->field($model, 'responsibility')->textInput() ?>
       </div>
       <div class="col-lg-4">
           <?= $form->field($model, 'status')->textInput() ?>
       </div>
   </div>

  <div class="row">
      <div class="col-lg-12">
          <?= $form->field($model, 'note')->textarea(['maxlength' => true]) ?>
      </div>
  </div>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
