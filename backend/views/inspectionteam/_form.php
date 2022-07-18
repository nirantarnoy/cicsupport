<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectionteam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspectionteam-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-8">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <label for="">ประเภทกิจกรรม</label>
            <select name="module_type_id" id="" class="form-control module-type-id">
                <option value="-1">--เลือก--</option>
                <?php $module_type_data = \backend\helpers\ModuleType::asArrayObject(); ?>
                <?php foreach($module_type_data as $key => $value):?>
                <?php $selected = ''; if($key == $model->module_type_id){$selected = "selected";}?>
                    <option value="<?=$key?>" <?=$selected;?>><?=$value['name']?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-lg-4">
            <div class="col-lg-4">
                <label for="">สถานะ</label> <br />
                <!--            <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-purple-d1 text-grey-m2" checked />-->
                <input type="checkbox" class="ace-switch input-lg ace-switch-bars bgc-success-d2" checked />
            </div>
        </div>
    </div>

    <?=$form->field($model, 'status')->hiddenInput(['class'=>'area-status'])->label(false) ?>

    <br>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 5%;text-align: center;">#</th>
                    <th>ผู้ตรวจ</th>
                    <th>สถานะ</th>
                    <th style="width: 5%"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="text-align: center;"></td>
                    <td><input type="text" class="form-control line-emp-id" name="line_emp_id[]" value="" readonly></td>
                    <td><input type="text" class="form-control line-emp-status" name="line_emp_status[]" value=""></td>
                    <td>
                        <div class="btn btn-danger btn-sm">ลบ</div>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        <div class="btn btn-primary">เพิ่ม</div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
