    <div class="banner">
                    <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
           
            <img src="view/img/banner1.png" style="width:100%">
            
            </div>

            <div class="mySlides fade">
            
            <img src="view/img/banner2.png" style="width:100%">
           
            </div>

            <div class="mySlides fade">
           
            <img src="view/img/banner3.png" style="width:100%">
        
            </div>

            <!-- Next and previous buttons -->
           
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>
     </div>
<main>
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
        <!-- <li><a href="">Iphone</a></li>
        <li><a href="">Sámung</a></li>
        <li><a href="">Oppo</a></li>
        <li><a href="">Remi</a></li>
        <li><a href="">Nokia</a></li>
        <li><a href="">doremon</a></li>
        <li><a href="">nobita</a></li>
        <li><a href="">Iphone</a></li> -->
      </ul>
    </div>

        <h1>SẢN PHẨM MỚI</h1>
        <div class="product">
            <?php
               $i=0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $hinh=$img_path.$img;
                   
                    echo ' 
                            <div class="pro-items">
                                <a href=""><img src="'.$hinh.'" alt="" class="img-pro"></a>
                                <h3 class="name-pro"><a href="">'.$name.'</a></h3>
                                    <div class="trung">
                                        <p class="price">'.$price.'</p>
                                        <button>Chi tiết sản phẩm</button>
                           </div>
                           </div>';
                           
                           $i+=1;
                }
            ?>
        <!-- <div class="pro-items">
                <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
                <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
                    <div class="trung">
                        <p class="price">7.990.000đ </p>
                        <button>Thêm vào giỏ hàng</button>
                    </div>
            </div>
            <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
                <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
                <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
                <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
                <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
                </div>
            </div> -->
            
        </div>
        <!-- <h1 class="cate">SẢN PHẨM NỔI BẬT</h1>
        <div class="product">
        <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
            <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
        <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
            <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
        <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
            <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
        <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
            <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
        <div class="pro-items">
            <a href=""><img src="view/img/iphone-x-256gb-silver-400x400.jpg" alt="" class="img-pro"></a>
            <h3 class="name-pro"><a href="">Laptop HP 15s i3 </a></h3>
            <div class="trung">
                <p class="price">7.990.000đ </p>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div> -->
    
</main>