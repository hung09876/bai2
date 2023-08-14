<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<a> nhập dữ liệu </a>
<?php $form = ActiveForm::begin(['options'=>['enctype'=> 'multipart/form-data']]); ?>
<?= $form-> field($model,'name')->textInput(['maxlength'=> true]) ?>
<?= $form ->field($model,'email') -> textInput((['maxlength'=> true])) ?>
<?= $form -> field($model,'imageFile')->fileInput() ?>
<?php ActiveForm::end() ?>