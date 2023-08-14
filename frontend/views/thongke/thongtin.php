<?php
use yii\helpers\Html;
?>
<?= Html::a('Thêm sinh viên',['create'],['class' => 'btn btn-success']) ?>

<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Tên sinh vien</th>
      <th scope="col">Tên môn hoc</th>
      <th scope="col">Tín chỉ</th> 
    </tr>
  </thead>
  <tbody>
  <?php foreach($model as $row): ?>
    <tr>
      <!-- <th scope="row"> -->
      <td><?= html::encode("{$row['name']}"); ?></td>

      <td><?= html::encode("{$row['ten']}"); ?></td>

      <td><?= html::encode("{$row['tin_chi']}"); ?></td>
      <?php// ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>