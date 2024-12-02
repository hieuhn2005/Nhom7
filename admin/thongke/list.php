
<div class="col-9 main-content">
        
        <div class="product">
            <h1>DANH SÁCH Thống kê</h1><br>
       
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Mã danh mục</th>
              <th>Tên danh mục</th>
              <th>Số lượng sản phẩm</th>
              <th>Giá trung bình</th>

            </tr>
          </thead>


          <tbody>

          <?php
              foreach ($listthongke as $thongke) {
                extract($thongke);

                echo'
                            <tr>
                              <td>'.$madm.'</td>
                              <td>'.$tendm.'</td>
                              <td>'.$countsp.'</td>
                              <td>'.$avgprice.'</td>
                    
                       
                             
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