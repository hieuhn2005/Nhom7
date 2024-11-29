<?php
    session_start();

    include "model/pdo.php";
    include "model/user.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/cart.php";
    include "global.php";

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();

    $act = isset($_GET['act']) ? $_GET['act'] : '';

    if (!in_array($act, ['login', 'register'])) {
        include "view/header.php";
    }

    // Kiểm tra nếu có hành động thêm vào giỏ hàng
    if (isset($_GET['add_to_cart'])) {
        $product_id = $_GET['add_to_cart'];
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user']['id'];  // Lấy ID người dùng từ session
            $quantity = 1;  // Mặc định là 1, bạn có thể cho phép người dùng chọn số lượng

            // Kiểm tra nếu sản phẩm đã có trong giỏ hàng chưa, nếu có thì cập nhật số lượng
            $sql = "SELECT * FROM cart WHERE user_id = ? AND product_id = ?";
            $existing_cart = pdo_query_one($sql, $user_id, $product_id);

            if ($existing_cart) {
                update_cart($user_id, $product_id, $existing_cart['quantity'] + 1);
            } else {
                add_to_cart($user_id, $product_id, $quantity);
            }

            header("Location: index.php");
            exit;
        } else {
            header("Location: index.php?act=login");
            exit;
        }
    }

    // Xử lý hiển thị giỏ hàng
    if (isset($_GET['act']) && $_GET['act'] == 'cart') {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user']['id'];
            $cart_items = get_cart($user_id);  // Lấy giỏ hàng người dùng
            include "view/cart.php";  // Giả sử bạn tạo view/cart.php để hiển thị giỏ hàng
        } else {
            header("Location: index.php?act=login");
            exit;
        }
    }

    // Cập nhật số lượng sản phẩm trong giỏ hàng
    if (isset($_POST['update_cart'])) {
        if (isset($_SESSION['user'])) {
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $user_id = $_SESSION['user']['id'];

            update_cart($user_id, $product_id, $quantity);
            header("Location: index.php?act=cart");
            exit;
        } else {
            header("Location: index.php?act=login");
            exit;
        }
    }

    // Xóa sản phẩm khỏi giỏ hàng
    if (isset($_GET['delete_cart'])) {
        if (isset($_SESSION['user'])) {
            $cart_id = $_GET['delete_cart'];
            delete_from_cart($cart_id);
            header("Location: index.php?act=cart");
            exit;
        } else {
            header("Location: index.php?act=login");
            exit;
        }
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
                        exit;
                    } else {
                        $error = $result['message'];
                    }
                }
                include "view/register.php";
                break;

            case 'logout':
                session_destroy();
                header('Location: index.php');
                exit;

            case 'sanpham':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }

                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = loadten_danhmuc($iddm);
                include "view/sanpham.php";
                break;

            case 'sanphamct':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                } else {
                    include "view/home.php";
                }
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
    } else {
        include "view/home.php";
    }

    include "view/footer.php";
?>
