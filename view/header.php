<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="view/css/index.css  ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <header>
    <div class="logo"><img src="view/img/logo1.png" alt=""></div>
    <nav>
      <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=tintuc">Tin tức</a></li>
        <li><a href="index.php?act=tuyendung">Tuyển dụng</a></li>
        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
       
        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
      </ul>
    </nav>
    <div class="search">
      <form action="index.php?act=sanpham" method="post">
        <input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
        <button type="submit" name="timkiem">Tìm kiếm</button>
      </form>
    </div>
    <div class="user-actions">
      <div class="nguoi" id="user-menu-toggle">
        <i class="fa-solid fa-user"></i>
        <?php if(!isset($_SESSION['user'])): ?>
        <p>người dùng</p>
        <?php else: ?>
        <p><?= $_SESSION['user']['username'] ?></p>
        <?php endif; ?>
        <!-- Dropdown menu -->
        <div class="user-dropdown" id="user-dropdown">
          <?php if(!isset($_SESSION['user'])): ?>
          <a href="index.php?act=login">Đăng nhập</a>
          <a href="index.php?act=register">Đăng ký</a>
          <?php else: ?>
          <a href="index.php?act=logout">Đăng xuất</a>
          <?php endif; ?>
        </div>
      </div>
            <div class="giohang">
  <a href="index.php?act=cart">
    <i class="fa-solid fa-cart-arrow-down"></i>
    <p>Giỏ hàng</p>
  </a>
</div>


    </div>
  </header>