<?php
    session_start();

    include "model/pdo.php";
    include "model/user.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/cart.php";
    include "model/order.php";
    include "model/order_detail.php";
    include "global.php";

    $user_id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;
    $order =  isset($_SESSION['cart']['order']) ? $_SESSION['cart']['order'] : null;

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $cart_items = get_cart($user_id);

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
    // if (isset($_GET['act']) && $_GET['act'] == 'cart') {
    //     if (isset($_SESSION['user'])) {
    //         $user_id = $_SESSION['user']['id'];
    //         $cart_items = get_cart($user_id);  // Lấy giỏ hàng người dùng
    //         include "view/cart.php";  // Giả sử bạn tạo view/cart.php để hiển thị giỏ hàng
    //     } else {
    //         header("Location: index.php?act=login");
    //         exit;
    //     }
    // }

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

            case 'checkout':
                if(isset($_POST['checkout'])) {
                    $name = trim($_POST['name']);
                    $phone = trim($_POST['phone']);
                    $address = trim($_POST['address']);
                    if (empty($name) || empty($phone) || empty($address)) {
                        header("Location: index.php?act=checkout");
                        exit();
                    }

                    $total_amount = array_sum(array_column($cart_items, 'total'));
                    $order_id = create_order($user_id, $name, $total_amount, $address, $phone);

                    foreach ($cart_items as $item) {
                        create_order_detail($order_id, $item['product_id'], $item['quantity'], $item['price'], $item['total']);
                    }

                    $_SESSION['cart']['order'] = [
                        'name' => $name,
                        'address' =>  $address,
                        'phone' => $phone,
                        'total_amount' => $total_amount,
                        'order_id' => $order_id
                    ];

                    clear_cart($user_id);

                    header("Location: index.php?act=thankyou");
                    exit();
                }

                include "view/checkout.php";
                break;

            case 'thankyou':
                unset($_SESSION['cart']['order']);
                include "view/thankyou.php";
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
            case 'cart':
                include "view/cart.php";
                break;

            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }

    if (!in_array($act, ['login', 'register'])) {
        include "view/footer.php";
     }
?>
