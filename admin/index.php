<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
                                      // controller danh mục
            case 'adddm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/add.php";
                break;

            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }

                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/add.php";
                break;


            case 'lisdm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){

                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm Thành công";
                }
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }

                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){

                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhập Thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/add.php";
                break;


                                 // controller sản phẩm

             case 'addsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/add.php";
                break;

            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }

                $listsanpham=loadall_sanpham("",0);
                include "sanpham/add.php";
                break;


            case 'lissp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){

                    } else{

                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm Thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/list.php";
                break;

            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){

                    } else{

                    }
                    $listdanhmuc=loadall_danhmuc();
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cập nhập Thành công";
                }
                $listsanpham=loadall_sanpham("",0   );
                include "sanpham/add.php";
                break;

            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }



    
    include "footer.php";

?>