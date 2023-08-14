<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?= Html::a('Trang chủ',['index'],['class' => 'btn btn-success']) ?>
<?php $form= ActiveForm::begin() ?>
<?= $form->field($model, 'idsinhvien')->textInput() ?>

<?= $form->field($model, 'idmonhoc')->textInput() ?>
<button>lưu</button>
<?php ActiveForm::end() ?>