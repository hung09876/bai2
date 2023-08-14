<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?= Html::a('Trang chủ',['index'],['class'=> 'btn btn-success']) ?>
<?= Html::a('tạo môn học ') ?>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model,'ten')->textInput() ?>
<?= $form->field($model,'code')->textInput() ?>
<?= $form->field($model,'tin_chi')->textInput() ?>
<?= Html::submitButton('lưu',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end() ?>