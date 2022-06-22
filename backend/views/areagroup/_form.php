<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Areagroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="areagroup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seq_sort')->textInput() ?>

    <?= $form->field($model, 'area_zone_id')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Areazone::find()->all(),'id','name'),
        'options' => [
            'placeholder'=>'เลือก'
        ]
    ]) ?>
    <?= $form->field($model, 'status')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
