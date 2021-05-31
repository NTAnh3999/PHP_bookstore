<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà sách Đại học Thăng Long</title>
    <!-- custom CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <!-- Link Font Aewsome -->
    <link rel="stylesheet" href="./public/fontawesome-5.13.1/css/all.min.css">
</head>
<body >
    <!-- begin header -->
    <div class="container-fluid bg-light">
        <div class="container mx-auto row header bg-light">
            <div class="col-md-3">
                <a <?php "href='./index.php?controller=book'"?>>
                    <img src="./public/image/TLU_bookstore_logo2.png" class="rounded logo"alt="Logo TLU">
                </a>
            </div>
            <!-- begin search bar -->
            <div class="col-md-6 search-bar-content pl-0">
                <nav class="navbar navbar-light pl-0">
                    <form class="form-inline ">
                    <input class="form-control mr-sm-1" type="search" placeholder="Nhập tên sách bạn muốn tìm kiếm" aria-label="Search" name="Search">
                    <button class="btn btn-tlu my-2 my-sm-0" name="Search"type="submit">Search</button>
                    </form>
                </nav>
            </div>
            <!-- end search bar -->
            <!-- begin notification -->
            <div class="col-md-1 notification">
                <button class="btn">
                    <i class="fas fa-bell"></i>
                    <p>Thông báo</p>
                </button>
            </div>
            <!-- end notification -->
            <!-- begin account -->
            <div class="col-md-1 account">
                <button class="btn">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng nhập</p>
                </button>
            </div>
            <!-- end account -->
            
            <!-- begin cart -->
            <div class="col-md-1 cart">
                <button class="btn">
                    <i class="fas fa-shopping-cart"></i>
                    <p>Giỏ hàng</p>
                </button>
            </div>
            <!-- end cart -->
            
        </div>
        <div class="container row mx-auto bg-light">
            <div class="dropdown">
                <button class="dropbtn">Danh mục sản phẩm</button>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div>
              
        </div>
    </div>
    <!-- end header -->

    <script src="./public/js/bootstrap.min.js"></script>
</body>
</html>