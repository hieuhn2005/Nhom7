
      <div class="col-9 main-content">
        
        <div class="product">
            <h1>THÊM SẢN PHẨM</h1><br>
        </div>
        <div class="danhmuc">
            <form action="index.php?act=lissp" method="post" enctype="multipart/form-data">
                <div class="mb10">
                    Danh mục <br>
                    <select name="iddm" id="">
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                        
                    </select>
                </div>
                <div class="mb10">
                    Tên sản phẩm: <br>
                    <input type="text" name="tensp" >
                </div><br>
                <div class="mb10">
                    Giá tiền: <br>
                    <input type="text" name="giasp" >
                </div><br>
                <div class="mb10">
                    Hình ảnh: <br>
                    <input type="file" name="hinh" id="">
                </div><br>
                <div class="mb10">
                    Mô tả: <br>
                    <textarea name="mota" id="" cols="92" rows="10"></textarea>
                </div><br>
                <div class="mb20">
                    <input type="submit" name="themmoi" value="Thêm mới" >
                 
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

