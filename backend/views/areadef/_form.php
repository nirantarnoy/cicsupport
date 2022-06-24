<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Areadef */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="areadef-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort_seq')->textInput() ?>

    <?= $form->field($model, 'area_group_id')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Areagroup::find()->all(),'id','name'),
        'options' => [
            'placeholder'=>'เลือกกลุ่มพื้นที่'
        ]
    ]) ?>

    <?= $form->field($model, 'area_id')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Area::find()->all(),'id','name'),
        'options' => [
            'placeholder'=>'เลือก'
        ]
    ]) ?>

    <?= $form->field($model, 'is_cal_bonus')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\helpers\CalType::asArrayObject(),'id','name'),
    ]) ?>

    <?= $form->field($model, 'status')->textInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
