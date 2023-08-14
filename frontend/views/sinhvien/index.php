<?php
use yii\helpers\Html;
?>

<?= Html::a('Thêm sinh viên',['create'],['class' => 'btn btn-success']) ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($model as $row): ?>
    <tr>
      <th scope="row"><?=  html::encode("{$row['idsinhvien']}"); ?></th>
      <td><?=  html::encode("{$row['name']}"); ?></td>
      <td><?= html::encode("{$row['masv']}"); ?></td>
      <td><?= html::encode("{$row['image']}"); ?></td>
      <?php// ?>
      <td>
      <p>
        <?= Html::a('delete', ['delete','idsinhvien'=>"{$row['idsinhvien']}"] , ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Update', ['update','idsinhvien'=>"{$row['idsinhvien']}"] , ['class' => 'btn btn-success']) ?>
    </p>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>