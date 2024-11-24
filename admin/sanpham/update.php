<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
      $hinh="<img src='".$hinhpath."' height='80'";
    }else{
      $hinh="no photo";
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
            <h1>SỬA SẢN PHẨM</h1><br>
        </div>
        <div class="danhmuc">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="mb10">
                     Chọn danh mục:
              
                    <select name="iddm" id="">
                     
                        <option value="0" selected>Tất cả</option>
                                    <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            // extract($danhmuc);
                                            // print_r($danhmuc);

                                            if($iddm==$danhmuc['id']) echo '<option value="'.$danhmuc['id'].'"selected>'.$danhmuc['name'].'</option>';
                                            else echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                                        }
                                    ?>
                                    
                        </select>
                </div><br>
                <div class="mb10">
                    Tên sản phẩm: <br>
                    <input type="text" name="tensp" value="<?= $name ?>" >
                </div><br>
                <div class="mb10">
                    Giá tiền: <br>
                    <input type="text" name="giasp" value="<?= $price ?>" >
                </div><br>
                <div class="mb10">
                    Hình ảnh: <br>
                    <input type="file" name="hinh" id="">
                    <?=$hinh?>
                </div><br>
                <div class="mb10">
                    Mô tả: <br>
                    <textarea name="mota" id="" cols="92" rows="10"><?= $mota ?></textarea>
                </div><br>
                <div class="mb20">
                    <input type="hidden" name="id" value="<?=$id?>">
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

