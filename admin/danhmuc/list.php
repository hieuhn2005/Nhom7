
      <div class="col-9 main-content">
        
        <div class="product">
            <h1>Thêm danh mục</h1><br>
        </div>
        <div class="danhmuc">
            <form action="index.php?act=lisdm" method="post">
                <div class="mb10">
                    Mã Loại: <br>
                    <input type="text" name="maloai" disabled >
                </div>
                <div class="mb10">
                    Tên Loại: <br>
                    <input type="text" name="tenloai" >
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

