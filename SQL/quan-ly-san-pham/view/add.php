<?php

if (isset($message)){
    echo "<p class='alert-info'>$message</p>";

}
?>
<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Thêm sản phẩm mới</h1>
      </div>
      <div class="col-12">
          <form method="post">
              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" class="form-control" name="name"  placeholder="Nhập tên" required>
              </div>
              <div class="form-group">
                  <label>Giá </label>
                  <input type="email" class="form-control" name="price" placeholder="Nhập giá" required>
              </div>
              <div class="form-group">
                  <label>mô tả sản phẩm</label>
                  <input type="text" class="form-control" name="describes" placeholder="Nhập mô tả" required>
              </div>
              <div class="form-group">
                  <label>nhà sản xuất</label>
                  <input type="email" class="form-control" name="producer" placeholder="Nhập tên nhà sản xuất" required>
              </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>       
     </div>   
   </div> 
</div> 