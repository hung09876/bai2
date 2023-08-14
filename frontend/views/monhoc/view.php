<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
//var_dump($model);
?>
<?= Html::a('Trang chủ',['index'],['class'=> 'btn btn-success']) ?>
<?=
DetailView::widget(
[
    'model'=>$model,
    'attributes' =>[
        'idmonhoc'=> 'id',
        'ten' =>'tên môn học',
        'code' => 'mã môn học',
        'tin_chi' => 'số tín chỉ',
    ]
]
)
?>