<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Area */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_group_id')->widget(\kartik\select2\Select2::className(),[
            'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Areagroup::find()->all(),'id','name'),
            'options' => [
                    'placeholder'=>'เลือกกลุ่มพื้นที่'
            ]
    ]) ?>

    <?= $form->field($model, 'std_prize_id')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\models\Standardprize::find()->all(),'id','name'),
        'options' => [
            'placeholder'=>'เลือก'
        ]
    ]) ?>

    <?= $form->field($model, 'seq_sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
