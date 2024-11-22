<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="container-fluid">
    <div class="row">
      <div class="col-3 sidebar">
        <div class="logo">
          <img src="../img/logo1.png" alt="">
        </div>
        <nav class="nav flex-column">
            <a class="nav-link" href="index.php?act=addsp"><i class="fas fa-university"></i> Trang chủ</a>
            <a class="nav-link" href="index.php?act=adddm"><i class="fas fa-list-ul"></i> Danh mục</a>
            <a class="nav-link" href="index.php?act=dskh"><i class="fas fa-user-friends"></i> Quản lí tài khoản</a>
            <a class="nav-link" href="index.php?act=dsbl"><i class="fas fa-file-alt"></i> Quản lí bình luận</a>
            <a class="nav-link" href="index.php?act=doanhthu"><i class="fas fa-chart-line"></i> Doanh thu</a>
            <a class="nav-link" href="index.php?act=thongke"><i class="fas fa-chart-bar"></i> Thống kê</a>

        </nav>
      </div>
      <div class="col-9 main-content">
        
        <div class="product">
            <h1>Sửa danh mục</h1><br>
        </div>
        <div class="danhmuc">
            <form action="index.php?act=updatedm" method="post">
                <div class="mb10">
                    Mã Loại: <br>
                    <input type="text" name="maloai" disabled value="<?php if(isset($id)&&($id!="")) echo $id;  ?>" >
                </div>
                <div class="mb10">
                    Tên Loại: <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;  ?>" >
                </div><br>
                <div class="mb20">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;  ?>">
                    <input type="submit" name="capnhap" value="Cập nhập" >
                    <input type="reset" value="Nhập lại">
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
        </div>

      </div>
    </div>
</div>

