<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$topic_data = \common\models\InspectionTopic::find()->all();
?>

<div class="inspectiontopicitem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <label for="">หัวข้อการตรวจ</label>
    <select id="" data-placeholder="Choose a state..." class="chosen-select form-control" name="topic_id">
        <option value=""></option>
        <?php foreach ($topic_data as $value): ?>
            <?php $selected = '';
            if ($model->topic_id == $value->id) {
                $selected = 'selected';
            }
            ?>
            <option value=" <?= $value->id ?>" <?= $selected ?> ><?= $value->name ?></option>
        <?php endforeach; ?>
    </select>

    <?= $form->field($model, 'activity_type_id')->textInput() ?>

    <?= $form->field($model, 'seq_sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
