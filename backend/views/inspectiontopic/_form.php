<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$module_data = \backend\helpers\ModuleType::asArrayObject();
//print_r($module_data);
?>


<div class="inspectiontopic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'seq_sort')->textInput() ?>

    <label for="">ประเภทกิจกรรม</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="module_type_id">
        <option value=""></option>
        <?php for ($i=0;$i <= count($module_data)-1;$i++): ?>
            <?php $selected = '';
            if ($model->module_type_id == $module_data[$i]['id']) {
                $selected = 'selected';
            }
            ?>
            <option value=" <?= $module_data[$i]['id'] ?>" <?= $selected ?> ><?= $module_data[$i]['name'] ?></option>
        <?php endfor; ?>
    </select>
    <br />

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
