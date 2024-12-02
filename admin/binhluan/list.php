
<div class="col-9 main-content">
        
        <div class="product">
            <h1>DANH SÁCH TÀI KHOẢN</h1><br>
       
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nội dung bình luận</th>
              <th>Iduser</th>
              <th>IdPro</th>
              <th>Ngày bình luận</th>
              <th>Chức năng</th>
            </tr>
          </thead>


          <tbody>

          <?php
              foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
              
                $xoabl="index.php?act=xoabl&id=".$id;
                echo'
                            <tr>
                              <td>'.$id.'</td>
                              <td>'.$noidung.'</td>
                              <td>'.$iduser.'</td>
                              <td>'.$idpro.'</td>
                              <td>'.$ngaybinhluan.'</td>
                              <td>
                              
                                <a href="'.$xoabl.'" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
