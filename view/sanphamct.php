<div class="ctsanpham">
      <div class="boxtrai">

        <div class="box1">
            <?php
              extract($onesp);
            ?>
            <h1><?=$name?></h1>
        

          <?php
            
              $img=$img_path.$img;
            
              echo '<img src="'.$img.'" alt="">';
              echo $mota;
          ?>
        </div>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluan.php",{idpro: <?=$id?>});
                    });
                </script>
        <div class="boxbinh" id="binhluan">
          <!-- <h1>bình luận</h1> -->
        </div>
        <div class="box1">
          <h1>sản phẩm cùng loại</h1>
          <div class="spcungloai">
          <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                  extract($sp_cungloai);
                  $linksp="index.php?act=sanphamct&idsp".$id;
                  echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
            ?>
            
          </div>
        </div>
      </div>
      <div class="boxphai">
        <div class="box2">
            <div class="boxsp">
            <?php
              extract($onesp);
              ?>
              <h1><?=$name?></h1>
          <div class="tien">
            <p>Giá tiền:</p>
            <h1><?=$price?>đ</h1>
          </div><br>
          <div class="tgiohang">

          <a href="index.php?add_to_cart='.$sp['id'].'"><input type="submit" value="Thêm vào giỏ hàng"></a>
          </div>
            </div>
        </div>
        
      </div>
    </div>