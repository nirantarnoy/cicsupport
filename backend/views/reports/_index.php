<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
$this->title = 'รายงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">
    <div class="row">
        <div class="col-lg-12">
            <h3><?=$this->title?></h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-group btn-group-toggle flex-wrap" data-toggle="buttons">
                <div role="button" class="d-style btn btn-outline-lightgrey btn-h-light-lightgrey btn-a-lighter-green btn-a-bold btn-a-bb2 overflow-hidden py-25 px-45 text-110">
                    <input type="radio" name="options" />
                    5ส.
                    <span class="v-active w-3 h-3 position-br mb-n25 mr-n25 bgc-current rotate-45 opacity-2"></span>
                </div>

                <div role="button" class="d-style active btn btn-outline-lightgrey btn-h-light-lightgrey btn-a-lighter-blue btn-a-bold btn-a-bb2 overflow-hidden py-25 px-45 text-110">
                    <input type="radio" name="options" checked />
                    Safety
                    <span class="v-active w-3 h-3 position-br mb-n25 mr-n25 bgc-current rotate-45 opacity-2"></span>
                </div>

                <div role="button" class="d-style btn btn-outline-lightgrey btn-h-light-lightgrey btn-a-lighter-orange btn-a-bold btn-a-bb2 overflow-hidden py-25 px-45 text-110">
                    <input type="radio" name="options" />
                    Kizen
                    <span class="v-active w-3 h-3 position-br mb-n25 mr-n25 bgc-current rotate-45 opacity-2"></span>
                </div>
            </div>
        </div>
    </div>
</div>
