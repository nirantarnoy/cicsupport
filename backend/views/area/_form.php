<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$area_group_data = \common\models\AreaGroup::find()->all();
$std_prize_data = \common\models\StandardPrize::find()->all();
$module_data = \backend\helpers\ModuleType::asArrayObject();
?>

<div class="area-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <div class="row">
        <div class="col-lg-4">
            <label for="">กลุ่มพื้นที่</label>
            <select id="area-group" data-placeholder="Choose a state..." class="chosen-select form-control"
                    name="area_group_id_new">
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
        </div>
        <div class="col-lg-4">
            <label for="">เกณฑ์การตัดเงิน</label>
            <select id="standard-prize-id" data-placeholder="Choose a state..." class="chosen-select form-control"
                    name="std_prize_id_new">
                <option value=""></option>
                <?php foreach ($std_prize_data as $value): ?>
                    <?php $selected = '';
                    if ($model->std_prize_id == $value->id) {
                        $selected = 'selected';
                    }
                    ?>
                    <option value=" <?= $value->id ?>" <?= $selected ?> ><?= $value->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="">ใช้กับกิจกรรม</label>
            <div class="tag-input-style" id="select2-parent">
                <select multiple id="form-field-chosen-2" class="chosen-selectx form-control">
                    <option value=""></option>
                    <?php foreach ($module_data as $key => $value): ?>
                        <?php $selected = '';
                        if ($model->std_prize_id == $key) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value=" <?= $key ?>" <?= $selected ?> ><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>

    <div style="height: 10px;"></div>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'seq_sort')->textInput() ?>
        </div>
        <div class="col-lg-4">
            <label for="">สถานะ</label> <br/>
            <!--            <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-purple-d1 text-grey-m2" checked />-->
            <?php
            $checked = '';
            if ($model->status == 1) {
                $checked = 'checked';
            }
            ?>
            <input type="checkbox" class="ace-switch input-lg ace-switch-bars bgc-success-d2"
                   onclick="changestatus($(this))" <?= $checked ?>/>
        </div>
        <div class="col-lg-4"></div>
    </div>

    <div class="form-group">
        <?=$form->field($model, 'status')->hiddenInput(['class'=>'area-status'])->label(false) ?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJsFile(\Yii::$app->request->baseUrl . '/js/select2.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$js = <<<JS
$(function(){
     $('#form-field-chosen-2').select2({
        allowClear: true,
        dropdownParent: $('#select2-parent'),
    });
     $('#standard-prize-id').select2({
     allowClear: true,
     });
       $('#area-group').select2({
     allowClear: true,
     });
});
JS;
$this->registerJs($js, static::POS_END);
?>
