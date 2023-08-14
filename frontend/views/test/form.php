<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="test-form">

<?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>