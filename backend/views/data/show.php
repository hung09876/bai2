<?php
use yii\helpers\Html;
?>

<p> bạn đã nhập thông tin: </p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Image</label>: <?= Html::encode($model->imageFile) ?></li>
</ul>