<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-12">
            <?= $form->field($model, 'ad_user')->textInput(['maxlength' => true,'readonly'=>'readonly']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <?= $form->field($model, 'prs_no')->widget(Select2::className(),[
                    'data'=>\yii\helpers\ArrayHelper::map(\common\models\QryEmpInfoEmpAll::find()->all(),'PRS_NO',function($data){
                        return $data->EMP_NAME.' '.$data->EMP_SURNME.' ['.$data->PRS_NO.']';
                    }),
                    'options' => [
                            'placeholder'=>'เลือกพนักงาน',
                            'onchange'=>'alert($(this).val())'
                    ]
            ])?>

            <?= $form->field($model, 'fname')->textInput(['maxlength' => true,'readonly'=>'readonly']) ?>

            <?= $form->field($model, 'lname')->textInput(['maxlength' => true,'readonly'=>'readonly']) ?>

            <?= $form->field($model, 'idcard')->textInput(['maxlength' => true,'readonly'=>'readonly']) ?>

            <?= $form->field($model, 'department_id')->textInput() ?>

            <?= $form->field($model, 'section_id')->textInput() ?>

            <?= $form->field($model, 'status')->textInput() ?>

        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
