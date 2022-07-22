<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'แผนตรวจ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">
    <div class="row">
        <div class="col-lg-6"><h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="text-align: right;">
            <p>
                <?= Html::a('Create', ['plan/create'], ['class' => 'btn btn-success']) ?>
            </p>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="dcard">
                <ul class="nav nav-tabs bgc-secondary-l3 border-y-1 brc-secondary-l3" role="tablist">
                    <li class="nav-item mr-2px">
                        <a id="home1-tab-btn"
                           class="d-style active btn btn-tp btn-light-secondary btn-h-white btn-a-text-dark btn-a-white text-95 px-3 px-sm-4 py-25 radius-0 border-0"
                           data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">
                            <span class="v-active position-tl w-100 border-t-3 brc-blue mt-n2px"></span>
                            5ส.
                        </a>
                    </li>

                    <li class="nav-item mr-2px">
                        <a id="profile1-tab-btn"
                           class="d-style btn btn-tp btn-light-secondary btn-h-white btn-a-text-dark btn-a-white text-95 px-3 px-sm-4 py-25 radius-0 border-0"
                           data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false">
                            <span class="v-active position-tl w-100 border-t-3 brc-blue mt-n2px"></span>
                            Safety
                        </a>
                    </li>

                    <li class="nav-item">
                        <a id="more1-tab-btn"
                           class="d-style btn btn-tp btn-light-secondary btn-h-white btn-a-text-dark btn-a-white text-95 px-3 px-sm-4 py-25 radius-0 border-0"
                           data-toggle="tab" href="#more1" role="tab" aria-controls="more1" aria-selected="false">
                            <span class="v-active position-tl w-100 border-t-3 brc-blue mt-n2px"></span>
                            Kizen
                        </a>
                    </li>
                </ul>

                <div class="tab-content bgc-white p-35 border-0">
                    <div class="tab-pane fade show active text-95" id="home1" role="tabpanel"
                         aria-labelledby="home1-tab-btn">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 15%">เลขที่แผนตรวจ</th>
                                        <th>วันที่แผน</th>
                                        <th>ทีมตรวจ</th>
                                        <th>หัวหน้าทีม</th>
                                        <th>กลุ่มพื้นที่</th>
                                        <th style="text-align: center;">สถานะการตรวจ</th>
                                        <th style="text-align: center;">ตรวจสอบคะแนน</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($model == null): ?>
                                        <tr>
                                            <td colspan="6" style="text-align: center;">
                                                <h5 style="color: red;">ยังไม่มีแผนตรวจ</h5>
                                            </td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach ($model as $value): ?>
                                            <tr>
                                                <td><?= $value->plan_no ?></td>
                                                <td><?= date('d-m-Y', strtotime($value->plan_target_date)) ?></td>
                                                <td><?= \backend\models\Inspectionteam::findName($value->team_id) ?></td>
                                                <td><?= \backend\models\Inspectionteam::findHead($value->team_id) ?></td>
                                                <td><?= \backend\models\Areagroup::findName($value->inspection_area_id) ?></td>
                                                <td style="text-align: center;">
                                                    <?php if ($value->status == 0): ?>
                                                        <span class="m-1 badge bgc-warning-d3 radius-round text-white-tp1 px-3 text-90">รอตรวจ</span>
                                                    <?php elseif ($value->status == 1): ?>
                                                        <span class="m-1 badge bgc-green-d3 radius-round text-white-tp1 px-3 text-90">ตรวจเสร็จแล้ว</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td style="text-align: center;"></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade text-95" id="profile1" role="tabpanel" aria-labelledby="profile1-tab-btn">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 15%">เลขที่แผนตรวจ</th>
                                        <th>วันที่แผน</th>
                                        <th>ทีมตรวจ</th>
                                        <th>สถานะการตรวจ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="4" style="text-align: center;">
                                            <h5 style="color: red;">ยังไม่มีแผนตรวจ</h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade text-95" id="more1" role="tabpanel" aria-labelledby="more1-tab-btn">
                        รอดำเนืนการต่อไป
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>

</div>
