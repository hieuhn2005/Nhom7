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
        <div class="box1">
          <h1>bình luận</h1>
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
              <h1><?=$name?></h1>
          <div class="giat">
            <p>dung lượng:</p>
            <input type="submit" value="64GB">
            <input type="submit" value="128GB">
            <input type="submit" value="256GB">
          </div><br>
          <div class="tien">
            <p>Giá tiền:</p>
            <h1>9980000 đ</h1>
          </div><br>
          <div class="tgiohang">

            <input type="submit" value="Thêm vào giỏ hàng">
          </div>
            </div>
        </div>
        
      </div>
    </div>