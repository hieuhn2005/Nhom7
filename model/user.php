<?php
    function loadall_taikhoan(){
        $sql="select * from users order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }


function register_user($email, $username, $password) {
    // Kiểm tra tên đăng nhập tồn tại
    if (check_username_exists($username)) {
        return ['success' => false, 'message' => 'Tên đăng nhập đã tồn tại'];
    }

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, username, password, created_at) VALUES (?, ?, ?, NOW())";
    try {
        pdo_execute($sql, $email, $username, $hashed_password);
        return ['success' => true, 'message' => 'Đăng ký thành công'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => 'Lỗi SQL: ' . $e->getMessage()];
    }
}

function check_login($username, $password) {
    $sql = "SELECT * FROM users WHERE username = ?";
    try {
        $user = pdo_query_one($sql, $username);
        if ($user && password_verify($password, $user['password'])) {
            unset($user['password']); // Không trả về mật khẩu
            return ['success' => true, 'user' => $user];
        }
        return ['success' => false, 'message' => 'Tên đăng nhập hoặc mật khẩu không chính xác'];
    } catch (PDOException $e) {
        return ['success' => false, 'message' => 'Lỗi SQL: ' . $e->getMessage()];
    }
}

function check_username_exists($username) {
    $sql = "SELECT COUNT(*) FROM users WHERE username = ?";
    try {
        return pdo_query_value($sql, $username) > 0;
    } catch (PDOException $e) {
        return false;
    }
}
?>
