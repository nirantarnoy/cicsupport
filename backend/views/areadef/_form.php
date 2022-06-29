<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$area_group_data = \common\models\AreaGroup::find()->all();
$area_data = \common\models\Area::find()->all();
?>

<div class="areadef-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort_seq')->textInput() ?>

    <label for="">กลุ่มพื้นที่</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_group_id">
        <option value=""></option>
        <?php foreach ($area_group_data as $value): ?>
            <?php $selected = '';
            if ($model->area_group_id == $value->id) {
                $selected = 'selected';
            }
            ?>
            <option value=" <?= $value->id ?>" <?= $selected ?> ><?= $value->name ?></option>
        <?php endforeach; ?>
    </select>

    <label for="">พื้นที่</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_id">
        <option value=""></option>
        <?php foreach ($area_data as $value): ?>
            <?php $selected = '';
            if ($model->area_id == $value->id) {
                $selected = 'selected';
            }
            ?>
            <option value=" <?= $value->id ?>" <?= $selected ?> ><?= $value->name ?></option>
        <?php endforeach; ?>
    </select>

    <?= $form->field($model, 'is_cal_bonus')->widget(\kartik\select2\Select2::className(),[
        'data'=>\yii\helpers\ArrayHelper::map(\backend\helpers\CalType::asArrayObject(),'id','name'),
    ]) ?>

    <?= $form->field($model, 'status')->textInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
