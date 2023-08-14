<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
?>
<?= Html::a('Trang chủ',['index'],['class'=> 'btn btn-success']) ?>
<?= 
DetailView::widget(
    [
        'model'=> $model,
        'attributes'=>[
            'idsinhvien',
            'name',
            'masv',
            'image',
        ]
    ]
)
?>