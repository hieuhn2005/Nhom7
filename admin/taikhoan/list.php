
<div class="col-9 main-content">
        
        <div class="product">
            <h1>DANH SÁCH TÀI KHOẢN</h1><br>
       
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>USERNAME</th>
              <th>Email</th>
              <th>Password</th>
              <th>Thời gian</th>
              <th>Role</th>
            </tr>
          </thead>


          <tbody>

          <?php
              foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                echo'
                            <tr>
                              <td>'.$id.'</td>
                              <td>'.$username.'</td>
                              <td>'.$email.'</td>
                              <td>'.$password.'</td>
                              <td>'.$created_at.'</td>
                              <td>'.$role.'</td>
                       
                             
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