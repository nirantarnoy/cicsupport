<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Inspectionteam */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="inspectionteam-form">

        <?php $form = ActiveForm::begin(); ?>

        <input type="hidden" class="remove-line-list" name="removelist" value="">
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
                    <?php foreach ($module_type_data as $key => $value): ?>
                        <?php $selected = '';
                        if ($key == $model->module_type_id) {
                            $selected = "selected";
                        } ?>
                        <option value="<?= $key ?>" <?= $selected; ?>><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-lg-4">
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
        </div>

        <?= $form->field($model, 'status')->hiddenInput(['class' => 'area-status'])->label(false) ?>

        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped" id="table-list">
                    <thead>
                    <tr>
                        <th style="width: 5%;text-align: center;">#</th>
                        <th>ผู้ตรวจ</th>
                        <th style="width: 15%;text-align: center;">สถานะ</th>
                        <th style="width: 15%;text-align: center;">ตั้งเป็นหัวหน้าทีม</th>
                        <th style="width: 5%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($model->isNewRecord): ?>
                        <tr>
                            <td style="text-align: center;"></td>
                            <td>
                                <input type="hidden" class="form-control line-person-id" name="line_person_id[]"
                                       value=""
                                       readonly>
                                <input type="text" class="form-control line-person-fullname"
                                       name="line_person_fullname[]"
                                       value="" readonly>
                            </td>
                            <td style="text-align: center;">
                                <input type="hidden" class="line-person-status" name="line_person_status[]">
                                <input type="checkbox"
                                       class="ace-switch input-lg ace-switch-bars bgc-success-d2"
                                       onclick="changestatus($(this))" <?= $checked ?>/>
                            </td>
                            <td style="text-align: center;">
                                <input type="hidden" class="line-ishead-status" name="line_ishead_status[]"
                                       value="">
                                <input type="checkbox"
                                       class="ace-switch input-lg ace-switch-yesno bgc-primary-d2 line-switch-ishead"
                                       onclick="changestatushead($(this))" />
                            </td>
                            <td>
                                <div class="btn btn-danger btn-sm" onclick="removeline($(this))">ลบ</div>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $runno = 0; ?>
                        <?php if ($modelline != null): ?>
                            <?php foreach ($modelline as $value): ?>
                                <?php $runno += 1; ?>
                                <tr data-var="<?= $value->id ?>">
                                    <td style="text-align: center;"><?= $runno ?></td>
                                    <td>
                                        <input type="hidden" class="form-control line-person-id" name="line_person_id[]"
                                               value="<?= $value->user_id ?>"
                                               readonly>
                                        <input type="text" class="form-control line-person-fullname"
                                               name="line_person_fullname[]"
                                               value="<?= \backend\models\Employee::findEmpFullNameFromPerson($value->user_id) ?>"
                                               readonly>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php
                                        $checked = '';
                                        if ($value->status == 1) {
                                            $checked = 'checked';
                                        }
                                        ?>
                                        <input type="hidden" class="line-person-status" name="line_person_status[]"
                                               value="<?= $value->status ?>">
                                        <input type="checkbox"
                                               class="ace-switch input-lg ace-switch-bars bgc-success-d2"
                                               onclick="changestatus($(this))" <?= $checked ?>/>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php
                                        $checked = '';
                                        if ($value->is_head == 1) {
                                            $checked = 'checked';
                                        }
                                        ?>
                                        <input type="hidden" class="line-ishead-status" name="line_ishead_status[]"
                                               value="<?= $value->is_head ?>">
                                        <input type="checkbox"
                                               class="ace-switch input-lg ace-switch-yesno bgc-primary-d2 line-switch-ishead"
                                               onclick="changestatushead($(this))" <?= $checked ?>/>
                                    </td>
                                    <td>
                                        <div class="btn btn-danger btn-sm" onclick="removeline($(this))">ลบ</div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td style="text-align: center;"></td>
                                <td>
                                    <input type="hidden" class="form-control line-person-id" name="line_person_id[]"
                                           value=""
                                           readonly>
                                    <input type="text" class="form-control line-person-fullname"
                                           name="line_person_fullname[]"
                                           value="" readonly>
                                </td>
                                <td style="text-align: center;">
                                    <input type="hidden" class="line-person-status" name="line_person_status[]">
                                    <input type="checkbox"
                                           class="ace-switch input-lg ace-switch-bars bgc-success-d2"
                                           onclick="changestatus($(this))" <?= $checked ?>/>
                                </td>
                                <td style="text-align: center;">
                                    <input type="hidden" class="line-ishead-status" name="line_ishead_status[]"
                                           value="">
                                    <input type="checkbox"
                                           class="ace-switch input-lg ace-switch-yesno bgc-primary-d2 line-switch-ishead"
                                           onclick="changestatushead($(this))" />
                                </td>
                                <td>
                                    <div class="btn btn-danger btn-sm" onclick="removeline($(this))">ลบ</div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>
                            <div class="btn btn-primary btn-add-member" onclick="showfindperson($(this))">เพิ่ม</div>
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

    <div id="findModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row" style="width: 100%">
                        <div class="col-lg-11">
                            <div class="input-group">
                                <input type="text" class="form-control search-item" placeholder="ค้นหา">
                                <span class="input-group-addon">
                                        <button type="submit" class="btn btn-primary btn-search-submit">
                                            <span class="fa fa-search"></span>
                                        </button>
                                    </span>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>

                </div>
                <!--            <div class="modal-body" style="white-space:nowrap;overflow-y: auto">-->
                <!--            <div class="modal-body" style="white-space:nowrap;overflow-y: auto;scrollbar-x-position: top">-->

                <div class="modal-body">

                    <input type="hidden" name="line_qc_product" class="line_qc_product" value="">
                    <table class="table table-bordered table-striped table-find-list" width="100%">
                        <thead>
                        <tr>
                            <th style="text-align: center">เลือก</th>
                            <th>รหัสพนักงาน</th>
                            <th>ชื่อ-นามสกุล</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-outline-success btn-product-selected" data-dismiss="modalx" disabled><i
                                class="fa fa-check"></i> ตกลง
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                class="fa fa-close text-danger"></i> ปิดหน้าต่าง
                    </button>
                </div>
            </div>

        </div>
    </div>

<?php
$url_to_findperson = \yii\helpers\Url::to(['person/findperson'], true);
$js = <<<JS
var selecteditem = [];
var removelist = [];
function showfindperson(e){
    $.ajax({
            'type': 'post',
            'dataType': 'html',
            'async': false,
            'url': '$url_to_findperson',
            'data': {},
            'success': function (data) {
                //   alert(data);
                $(".table-find-list tbody").html(data);
                $("#findModal").modal("show");
            }
        });
}
function addselecteditem(e) {
       // alert('hi');return;
       var id = e.attr('data-var');
       var line_person_id = e.closest('tr').find('.line-person-id').val();
       var line_person_fullname = e.closest('tr').find('.line-person-fullname').val();
     
       if (id) {
           if (e.hasClass('btn-outline-success')) {
               var obj = {};
               obj['id'] = id;
               obj['line_person_id'] = line_person_id;
               obj['line_person_fullname'] = line_person_fullname;
             
               selecteditem.push(obj);

               e.removeClass('btn-outline-success');
               e.addClass('btn-success');
               disableselectitem();
               console.log(selecteditem);
           } else {
               //selecteditem.pop(id);
               $.each(selecteditem, function (i, el) {
                   if (this.id == id) {
                       selecteditem.splice(i, 1);
                   }
               });
               e.removeClass('btn-success');
               e.addClass('btn-outline-success');
               disableselectitem();
               console.log(selecteditem);
           }
       }
   }

    function disableselectitem() {
        if (selecteditem.length > 0) {
            $(".btn-product-selected").prop("disabled", "");
            $(".btn-product-selected").removeClass('btn-outline-success');
            $(".btn-product-selected").addClass('btn-success');
        } else {
            $(".btn-product-selected").prop("disabled", "disabled");
            $(".btn-product-selected").removeClass('btn-success');
            $(".btn-product-selected").addClass('btn-outline-success');
        }
    }

    $(".btn-product-selected").click(function () {
        var linenum = 0;
        if (selecteditem.length > 0) {
            var product_per = $('.product-per').val();
            // alert(product_per);
            for (var i = 0; i <= selecteditem.length - 1; i++) {
                var line_person_id = selecteditem[i]['line_person_id'];
                var line_person_fullname = selecteditem[i]['line_person_fullname'];
        

                if (check_dup(line_person_id) == 1) {
                    alert("รายการสินค้า " + line_person_fullname + " มีในรายการแล้ว");
                    return false;
                }

                var tr = $("#table-list tbody tr:last");

                if (tr.closest("tr").find(".line-person-id").val() == "") {
                    tr.closest("tr").find(".line-person-id").val(line_person_id);
                    tr.closest("tr").find(".line-person-fullname").val(line_person_fullname);
                    
                } else {
                    var clone = tr.clone();
                    //clone.find(":text").val("");
                    // clone.find("td:eq(1)").text("");
                     tr.closest("tr").find(".line-person-id").val(line_person_id);
                    tr.closest("tr").find(".line-person-fullname").val(line_person_fullname);

                    clone.attr("data-var", "");
                    clone.find('.line-rec-id').val("");

                    // clone.find(".line-price").on("keypress", function (event) {
                    //     $(this).val($(this).val().replace(/[^0-9\.]/g, ""));
                    //     if ((event.which != 46 || $(this).val().indexOf(".") != -1) && (event.which < 48 || event.which > 57)) {
                    //         event.preventDefault();
                    //     }
                    // });

                    tr.after(clone);

                    //cal_num();
                }
            }
            // cal_num();
        }
        // $("#table-list tbody tr").each(function () {
        //     linenum += 1;
        //     $(this).closest("tr").find("td:eq(0)").text(linenum);
        //     // $(this).closest("tr").find(".line-prod-code").val(line_prod_code);
        // });
        selecteditem.length = 0;

        $("#table-find-list tbody tr").each(function () {
            $(this).closest("tr").find(".btn-line-select").removeClass('btn-success');
            $(this).closest("tr").find(".btn-line-select").addClass('btn-outline-success');
        });
        $(".btn-product-selected").removeClass('btn-success');
        $(".btn-product-selected").addClass('btn-outline-success');
        $("#findModal").modal('hide');
        $(".btn-add-promotion").show();
        
        calnumber();
        
    });
  function calnumber(){
      var i = 1;
       $("#table-list tbody tr").each(function () {
          $(this).find("td:eq(0)").html(i);
          i+=1;
       });
  }

  function check_dup(product_id) {
        var _has = 0;
        $("#table-list tbody tr").each(function () {
            var p_id = $(this).closest('tr').find('.line-person-id').val();
            // alert(p_id);
            // alert(p_id + " = " + prod_id);
            if (p_id == product_id) {
                _has = 1;
            }
        });
        return _has;
    }
    function removeline(e) {
        // alert();
        if (confirm("ต้องการลบรายการนี้ใช่หรือไม่?")) {
            if (e.parent().parent().attr("data-var") != '') {
                removelist.push(e.parent().parent().attr("data-var"));
                $(".remove-line-list").val(removelist);
            }

            // alert(removelist);

            if ($("#table-list tbody tr").length == 1) {
                $("#table-list tbody tr").each(function () {
                    $(this).find(":text").val("");
                    $(this).find(':input[type="number"]').val("");
                    // $(this).find(".line-prod-photo").attr('src', '');
                    // $(this).find(".line-qty").val(1);
                    // cal_num();
                });
            } else {
                e.parent().parent().remove();
            }
            alltotal();
            // cal_linenum();
            // cal_all();
        }
    }
  function changestatus(e){
    if(e.is(':checked')){
       e.prop('checked', true);
       e.closest('tr').find(".line-person-status").val(1);
    }else {
       e.prop('checked', false);
        e.closest('tr').find(".line-person-status").val(0);
    }
  }
  
  function changestatushead(e){
      var c_index = e.parent().parent().index();
      
      $("#table-list tbody tr").each(function(){
           if($(this).index() == c_index){
               if(e.is(':checked')){
                   e.prop('checked', true);
                   e.closest('tr').find(".line-ishead-status").val(1);
               }else{
                   e.prop('checked', false);
               e.closest('tr').find(".line-ishead-status").val(0);
               }
              
           }else{
                $(this).find(".line-ishead-status").val(0);
                $(this).find(".line-switch-ishead").prop('checked', false);
           }
      });
       
  }
JS;
$this->registerJs($js, static::POS_END);
?>