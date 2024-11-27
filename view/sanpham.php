<div class="productt">
        <br><br>
      
    <h1>DANH MỤC SẢN PHẨM</h1>
    <div class="danhmuc">
      <ul>
        <?php
            foreach ($dsdm as $dm) {
               extract($dm);
               $linkdm="index.php?act=sanpham&iddm=".$id;
               echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
            }
        ?>

      </ul>
</div>
    <h1>DANH MỤC: <strong>  <?=$tendm?> </strong></h1>

        <div class="product">
        <?php
              $i=0;
              foreach ($dssp as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
               
                echo ' 
                        <div class="pro-items">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" class="img-pro"></a>
                            <h3 class="name-pro"><a href="'.$linksp.'">'.$name.'</a></h3>
                                <div class="trung">
                                    <p class="price">'.$price.'</p>
                                    <button>Chi tiết sản phẩm</button>
                       </div>
                       </div>';
                       
                       $i+=1;
            }
        ?>
    </div  