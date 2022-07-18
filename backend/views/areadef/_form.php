<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$area_group_data = \common\models\AreaGroup::find()->all();
$area_data = \common\models\Area::find()->all();
?>

<div class="areadef-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <label for="">กลุ่มพื้นที่</label>
            <select id="area-group-id" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_group_id">
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
            <label for="">พื้นที่</label>
            <select id="area-id" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_id">
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

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'sort_seq')->textInput() ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'is_cal_bonus')->widget(\kartik\select2\Select2::className(),[
                'data'=>\yii\helpers\ArrayHelper::map(\backend\helpers\CalType::asArrayObject(),'id','name'),
            ]) ?>
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
    </div>





    <?=$form->field($model, 'status')->hiddenInput(['class'=>'area-status'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile(\Yii::$app->request->baseUrl . '/js/select2.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$js = <<<JS
$(function(){
     $('#area-group-id').select2({
        allowClear: true,
     });
     
     $('#area-id').select2({
        allowClear: true,
     });
     
});
function changestatus(e){
    if(e.is(':checked')){
       e.prop('checked', true);
       $(".area-status").val(1);
    }else {
       e.prop('checked', false);
       $(".area-status").val(0);
    }
    
}
   
JS;
$this->registerJs($js, static::POS_END);
?>