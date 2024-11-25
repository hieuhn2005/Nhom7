<?php
session_start();
include "model/pdo.php";
include "model/user.php";
include "global.php";

$act = isset($_GET['act']) ? $_GET['act'] : '';

if (!in_array($act, ['login', 'register'])) {
    include "view/header.php";
}

if ($act == '') {
    include "view/home.php";
} else {
    switch ($act) {
        case 'login':
            if (isset($_POST['login'])) {
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? $_POST['password'] : '';

                $result = check_login($username, $password);
                if ($result['success']) {
                    $_SESSION['user'] = $result['user'];
                    header('Location: index.php');
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

        default:
            include "view/home.php";
            break;
    }
}

if (!in_array($act, ['login', 'register'])) {
    include "view/footer.php";
}
?>
