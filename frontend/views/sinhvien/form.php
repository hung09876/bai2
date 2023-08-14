<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?= Html::a('Trang chủ',['index'],['class' => 'btn btn-success']) ?>

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>

<?= $form->field($model, 'name')->textInput() ?>

<?= $form->field($model, 'masv')->textInput() ?>

<?= $form->field($model, 'image')->fileInput() ?>

<?= Html::submitButton('lưu') ?>

<?php ActiveForm::end() ?>