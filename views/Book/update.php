<?php
    $selectedValue = "selected";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/css/form.css">
  <title>Chỉnh sửa sách</title>
</head>
<body>
  
  <div class="container">
    <h2 class="title">Thêm mới sản phẩm</h2>
      <form method="post" enctype="multipart/form-data">
     
        <label for="fname">Mã sản phẩm</label>
        <input type="text" id="fname" name="productid" value="<?php echo $data['book']['Ma_SanPham'];?>" readonly>

        <label for="lname">Tên sản phẩm</label>
        <input type="text" id="lname" name="productname" value="<?php echo $data['book']['TenSanPham'];?>">

        <label for="lname">Giá sản phẩm(VND)</label>
        <input type="number" id="lname" name="productprice" value="<?php echo $data['book']['DonGia'];?>">
        
        <label for="myfile">Chọn hình ảnh: </label>
        <input type="file" id="myfile" name="myfile" value="<?php echo __FILE__.$data['book']['HinhAnh']?>"><br><br>
        
        <label for="status">Tình trạng</label>
        <select id="status" name="status">
          <option value="1" <?php if($data['book']['TrangThai']){echo $selectedValue;}?>>Còn hàng</option>
          <option value="0" <?php if(!$data['book']['TrangThai']){echo $selectedValue;}?>>Hết hàng</option>
        </select>
        <div class="form-group">
          <input type="submit" value="Update" name="update">
          <a href="index.php?controller=book">
            <button type="button" class="btn btn-danger">Hủy</button>
          </a>
        </div>
        
      </form>
  </div>
  
</body>
</html>