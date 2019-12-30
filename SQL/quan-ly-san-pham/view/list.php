<h2>Danh sách sản phẩm</h2>
<a href="../index.php?page=add">Thêm mới</a>
<table class="table">
  <thead>
  <tr>
      <th>STT</th>
      <th>Name</th>
      <th>Price</th>
      <th>Bescribes</th>
      <th>Producer</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($products as $key => $product): ?>
  <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $product->name ?></td>
      <td><?php echo $product->email ?></td>
      <td><?php echo $product->email ?></td>
      <td><?php echo $product->address ?></td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>
