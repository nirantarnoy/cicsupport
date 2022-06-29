<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$area_group_data = \common\models\AreaGroup::find()->all();
$std_prize_data = \common\models\StandardPrize::find()->all();
?>

<div class="area-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <label for="">กลุ่มพื้นที่</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_group_id_new">
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

    <label for="">เกณฑ์การตัดเงิน</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="std_prize_id_new">
        <option value=""></option>
        <?php foreach ($std_prize_data as $value): ?>
            <?php $selected = '';
                if($model->std_prize_id == $value->id){
                    $selected = 'selected';
                }
            ?>
            <option value=" <?= $value->id ?>" <?= $selected ?> ><?= $value->name ?></option>
        <?php endforeach; ?>
    </select>

    <?= $form->field($model, 'seq_sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
