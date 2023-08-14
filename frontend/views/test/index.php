<?php
use yii\helpers\Html;
?>
<?= html::a('tạo mới',['create'],['class'=>'btn btn-success']) ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">tên môn học</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($model as $row): ?>
    <tr>
      <th scope="row"><?=  html::encode("{$row['idtest']}"); ?></th>
      <td><?=  html::encode("{$row['name']}"); ?></td>
      <td><?=  html::encode("{$row['ten_mon']}"); ?></td>
      <td><?= html::encode("{$row['email']}"); ?></td>
      <td><?= html::encode("{$row['image']}"); ?></td>
      <?php// ?>
      <td>
      <p>
        <?= Html::a('delete', ['delete','idtest'=>"{$row['idtest']}"] , ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Update', ['update','idtest'=>"{$row['idtest']}"] , ['class' => 'btn btn-success']) ?>
    </p>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    