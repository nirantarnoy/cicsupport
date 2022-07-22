<?php
$month = [
    ['id' => 1, 'name' => 'มกราคม'],
    ['id' => 2, 'name' => 'กุมภาพันธ์'],
    ['id' => 3, 'name' => 'มีนาคม'],
    ['id' => 4, 'name' => 'เมษายน'],
    ['id' => 5, 'name' => 'พฤษภาคม'],
    ['id' => 6, 'name' => 'มิถุนายน'],
    ['id' => 7, 'name' => 'กรกฎาคม'],
    ['id' => 8, 'name' => 'สิงหาคม'],
    ['id' => 9, 'name' => 'กันยายน'],
    ['id' => 10, 'name' => 'ตุลาคม'],
    ['id' => 11, 'name' => 'พฤศจิกายน'],
    ['id' => 12, 'name' => 'ธันวาคม']];
$c_month = date('m');


$plan_date_data = [];

$model_team = \backend\models\Inspectionteam::find()->all();
$model_areagroup = \backend\models\Areagroup::find()->all();

?>

<div class="row">
    <div class="col-lg-12">
        <h4>กำหนดแผนตรวจ 5ส.</h4>
    </div>
</div>
<form action="<?= \yii\helpers\Url::to(['plan/genplan'], true) ?>" method="post">
    <div class="row">
        <div class="col-lg-3">
            <label for="">เดือน</label>
            <select name="plan_for_month" class="form-control plan-for-month" id="">
                <?php for ($i = 0; $i <= count($month) - 1; $i++): ?>
                    <?php
                    $selected = '';
                    if ($month[$i]['id'] == (int)$c_month) {
                        $selected = 'selected';
                    }
                    ?>
                    <option value="<?= $month[$i]['id'] ?>" <?= $selected ?>><?= $month[$i]['name'] ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="">ปี</label>
            <input type="hidden" name="plan_for_year" value="<?= date('Y') ?>">
            <input type="text" class="form-control" name="plan_for_year" readonly value="<?= date('Y') ?>">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th style="width: 15%">ทีมตรวจ</th>
                    <th>หัวหน้าทีม</th>
                    <th style="width: 20%">กลุ่มพื้นที่ตรวจ</th>
                    <th>สถานะ</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($model_team as $value): ?>
                    <tr>
                        <td>
                            <input type="hidden" name="line_team_id[]" value="<?= $value->id ?>">
                            <input type="text" class="form-control line-team-name" name="line_team_name[]"
                                   value="<?= $value->name ?>" readonly>
                        </td>
                        <td>
                            <?= \backend\models\Inspectionteam::findHead($value->id) ?>
                        </td>
                        <td>
                            <select name="line_areagroup_id[]" class="form-control line-areagroup-id" id="">
                                <?php foreach ($model_areagroup as $val): ?>
                                    <?php
                                    $selected = '';
                                    if ($i + 1 == $val->id) {
                                        $selected = 'selected';
                                    }
                                    ?>
                                    <option value="<?= $val->id ?>" <?= $selected ?>><?= $val->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <input type="submit" class="btn btn-success" value="บันทึก">
        </div>
    </div>
</form>