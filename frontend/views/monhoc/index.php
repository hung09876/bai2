<?php
use yii\helpers\Html;
?>
<?= Html::a('thêm môn học',['create'],['class'=>'btn btn-success']) ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">mã môn học</th>
      <th scope="col">số tin chi</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($model as $row): ?>
    <tr>
      <th scope="row"><?=  html::encode("{$row['idmonhoc']}"); ?></th>
      <td><?=  html::encode("{$row['ten']}"); ?></td>
      <td><?= html::encode("{$row['code']}"); ?></td>
      <td><?= html::encode("{$row['tin_chi']}"); ?></td>
      <?php// ?>
      <td>
      <p>
        <?= Html::a('delete', ['delete','idmonhoc'=>"{$row['idmonhoc']}"] , ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Update', ['update','idmonhoc'=>"{$row['idmonhoc']}"] , ['class' => 'btn btn-success']) ?>
    </p>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>