<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$zone_data = \common\models\AreaZone::find()->all();
?>

<div class="areagroup-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'seq_sort')->textInput() ?>
        </div>
        <div class="col-lg-4">
            <label for="">โซนพื้นที่</label>
            <select id="zone-id" data-placeholder="Choose a state..." class="chosen-select form-control" name="area_zone_id_new">
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
        </div>
    </div>
    <div class="row">
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
     $('#zone-id').select2({
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