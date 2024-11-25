<?php
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "view/header.php";
    include "global.php";

    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanphamct':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']!="")){
                    $id=$_GET['idsp'];
                    $sp_cungloai=load_sanpham_cungloai($id);
                    $onesp=loadone_sanpham($id);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'tintuc':
                include "view/tintuc.php";
                break;
            
            case 'tuyendung':
                include "view/tuyendung.php";
                break;
            
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            
            case 'lienhe':
                include "view/lienhe.php";
                break;
            
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    
    include "view/footer.php";

?>