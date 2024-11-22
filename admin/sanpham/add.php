<div class="container-fluid">
    <div class="row">
      <div class="col-3 sidebar">
        <div class="logo">
          <img src="../view/img/logo1.png" alt="">
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
            <h1>QUẢN LÝ DANH SÁCH SẢN PHẨM</h1><br>
        <a href="index.php?act=lissp"><button>Thêm sản phẩm</button></a>
        </div>

        <form action="index.php?act=addsp" method="post">
          <input type="text" name="kyw">
                   <select name="iddm" id="">
                      <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>
                                
                    </select>
                    <input type="submit" name="listok" value="Tìm kiếm">
        </form><br>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Sản phẩm</th>
              <th>Hình ảnh </th>
              <th>Giá tiền </th>
              <th>Mô tả</th>
              <th>Chức năng</th>
      
            </tr>
          </thead>


          <tbody>

          <?php
              foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                  $hinh="<img src='".$hinhpath."' height='80'";
                }else{
                  $hinh="no photo";
                }
                echo'
                            <tr>
                              <td>'.$id.'</td>
                              <td>'.$name.'</td>
                              <td>'.$hinh.'</td>
                              <td>'.$price.'</td>
                              <td>'.$mota.'</td>
                       
                              <td>
                                <a href="'.$suasp.'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="'.$xoasp.'" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>
                    ';
              }
          ?>
        
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>