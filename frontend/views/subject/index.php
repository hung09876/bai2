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
      <th scope="row">
      
      <td><?= html::encode("{$row['idtest']}"); ?></td>
      <td><?= html::encode("{$row['ten_mon']}"); ?></td>
      <?php// ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>