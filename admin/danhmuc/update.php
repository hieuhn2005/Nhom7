<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

      <div class="col-9 main-content">
        
        <div class="product">
            <h1>Sửa danh mục</h1><br>
        </div>
        <div class="danhmuc">
            <form action="index.php?act=updatedm" method="post">
                <div class="mb10">
                    Mã Loại: <br>
                    <input type="text" name="maloai" disabled value="<?php if(isset($id)&&($id!="")) echo $id;  ?>" >
                </div>
                <div class="mb10">
                    Tên Loại: <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;  ?>" >
                </div><br>
                <div class="mb20">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;  ?>">
                    <input type="submit" name="capnhap" value="Cập nhập" >
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

