<?php
    require_once "./views/Layout/admin.php";
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    $urlDelete = "index.php?controller=book&action=delete&id=";
    $urlUpdate = "index.php?controller=book&action=update&id=";
    $srcImg = "./public/image/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/fontawesome-5.13.1/css/all.min.css">
</head>
<body>
    <a href="index.php?controller=book&action=create" class="px-5">
        <button type="button" class="btn btn-outline-success my-3">
        <i class="fas fa-plus"></i>Thêm sách
        </button>
    </a>
    <!-- <?php if(isset($GLOBALS['success'])) {
            echo $GLOBALS['success'];
          }
          
    ?> -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Hình ảnh</th>
                <th>Tình trạng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($data['book'])):?>
            <tr>
                <td colspan="7" class="text-danger text-center">Không có sản phẩm nào</td>
            </tr>
            <?php else:?>
                <?php foreach($data['book'] AS $key => $value): ?>
                    <tr>
                        <td><?php echo $value['Ma_SanPham'];?></td>
                        <td><?php echo $value['TenSanPham'];?></td>
                        <td><?php echo $value['DonGia'].'đ';?></td>
                        <td>
                            <img src="<?php echo $srcImg.$value['HinhAnh'];?>"
                            class="img-thumbnail"alt='Ảnh sản phẩm' style="width:80px;height:80px;">
                        </td>
                        <td><?php echo $value['TrangThai'];?></td>
                        <td>
                        <a href="" data-toggle="tooltip" data-placement="top" title="Xem chi tiết">
                        <i class="fas fa-eye text-info" style="font-size:20px;"></i>
                        </a>
                        <a href="<?php echo $urlUpdate.$value['Ma_SanPham'];?>" data-toggle="tooltip" data-placement="top" title="Sửa sách">
                            <i class="fas fa-edit text-warning" style="font-size:20px;"></i>
                        </a>
                        <a href="<?php echo $urlDelete.$value['Ma_SanPham'];?>" data-toggle="tooltip" data-placement="top" title="Xóa sách" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                            <i class="fas fa-trash-alt text-danger" style="font-size:20px;"></i>
                        </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
</body>
</html>
