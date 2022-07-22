<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">
    <h3><?= Html::encode($this->title) ?></h3>
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-4">
            <?= $form->field($model, 'ad_user')->textInput(['maxlength' => true, 'readonly' => 'readonly']) ?>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
            <?php
            $checked1 = '';
            if ($model->is_5s_enable == 1) {
                $checked1 = 'checked';
            }
            ?>
            <label for="">กรรมการ 5ส.</label><br />
            <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-primary-d2"
                   onclick="changestatus1($(this))" <?=$checked1?>/>
            <input type="hidden" class="is-5s-enable" name="is_5s_enable" value="<?=$model->is_5s_enable?>">
        </div>
        <div class="col-lg-2">

        </div>

    </div>
    <div class="row">

        <div class="col-lg-4">
            <label for="">พนักงาน</label>
            <select id="emp-id" name="emp_id" data-placeholder="Choose a state..." class="chosen-select form-control">
                <option value=""></option>
                <?php $data = \yii\helpers\ArrayHelper::map(\backend\models\Employee::find()->all(), 'id', function ($data) {
                    return $data->fname . ' ' . $data->lname;
                }); ?>
                <?php foreach ($data as $key => $value): ?>
                    <?php $selected = "";
                    if ($model->emp_id == $key) {
                        $selected = "selected";
                    }
                    ?>
                    <option value="<?= $key ?>" <?= $selected ?>><?= $value ?></option>
                <?php endforeach; ?>
            </select>


        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <?php
            $checked2 = '';
            if ($model->is_safety_enable == 1) {
                $checked2 = 'checked';
            }
            ?>
            <label for="">กรรมการ Safety</label><br />
            <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-primary-d2"
                   onclick="changestatus2($(this))" <?=$checked2?>/>
            <input type="hidden" class="is-safety-enable" name="is_safety_enable" value="<?=$model->is_safety_enable?>">
        </div>

    </div>
    <div style="height: 10px;"></div>
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


    <?= $form->field($model, 'status')->hiddenInput(['class' => 'area-status'])->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile(\Yii::$app->request->baseUrl . '/js/select2.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$js = <<<JS
$(function(){
     $('#emp-id').select2({
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
function changestatus1(e){
    if(e.is(':checked')){
       e.prop('checked', true);
       $(".is-5s-enable").val(1);
    }else {
       e.prop('checked', false);
       $(".is-5s-enable").val(0);
    }
    
}
function changestatus2(e){
    if(e.is(':checked')){
       e.prop('checked', true);
       $(".is-safety-enable").val(1);
    }else {
       e.prop('checked', false);
       $(".is-safety-enable").val(0);
    }
    
}
   
JS;
$this->registerJs($js, static::POS_END);
?>
