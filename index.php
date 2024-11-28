<?php
    session_start();

    include "model/pdo.php";
    include "model/user.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "global.php";

    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();

    $act = isset($_GET['act']) ? $_GET['act'] : '';

    if (!in_array($act, ['login', 'register'])) {
        include "view/header.php";
    }

    if($act){
        switch ($act) {
            case 'login':
                if (isset($_POST['login'])) {
                    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
                    $result = check_login($username, $password);
                    if ($result['success']) {
                        $_SESSION['user'] = $result['user'];
                        if ($_SESSION['user']['role'] == 1) {
                            header('Location: /duan1/admin/index.php?act=addsp');
                            exit;
                        } else {
                            header('Location: /duan1/index.php');
                            exit;
                        }
                    } else {
                        $error = $result['message'];
                    }
                }
                include "view/login.php";
                break;
    
            case 'register':
                if (isset($_POST['register'])) {
                    $email = trim($_POST['email']);
                    $username = trim($_POST['username']);
                    $password = $_POST['password'];
    
                    $result = register_user($email, $username, $password);
                    if ($result['success']) {
                        $success = $result['message'];
                        header('Location: index.php?act=login');
                    } else {
                        $error = $result['message'];
                    }
                }
                include "view/register.php";
                break;
    
            case 'logout':
                session_destroy();
                header('Location: index.php');
                break;

            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm=0;
                
                }
   
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=loadten_danhmuc($iddm);
                include "view/sanpham.php";
                break;
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