<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$zone_data = \common\models\AreaZone::find()->all();
?>

<div class="areagroup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seq_sort')->textInput() ?>


    <label for="">โซนพื้นที่</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_zone_id_new">
        <option value=""></option>
        <?php foreach ($zone_data as $value): ?>
            <?php $selected = '';
            if ($model->area_zone_id == $value->id) {
                $selected = 'selected';
            }
            ?>
            <option value=" <?= $value->id ?>" <?= $selected ?> ><?= $value->name ?></option>
        <?php endforeach; ?>
    </select>

    <?= $form->field($model, 'status')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
