<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?= Html::a('Trang chủ',['index'],['class' => 'btn btn-success']) ?>
<?php $form= ActiveForm::begin() ?>
<?= $form->field($model, 'idtest')->textInput() ?>

<?= $form->field($model, 'ten_mon')->textInput() ?>
<button>lưu</button>
<?php ActiveForm::end() ?>