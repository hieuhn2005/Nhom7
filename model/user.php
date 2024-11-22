<?php
function register_user($email, $username, $password) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
    try {
        pdo_execute($sql, $email, $username, $hashed_password);
        return true;
    } catch(PDOException $e) {
        return false;
    }
}

function check_login($email, $password) {
    $sql = "SELECT * FROM users WHERE email = ?";
    try {
        $user = pdo_query_one($sql, $email);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    } catch(PDOException $e) {
        return false;
    }
}

function check_email_exists($email) {
    $sql = "SELECT COUNT(*) FROM users WHERE email = ?";
    try {
        $count = pdo_query_value($sql, $email);
        return $count > 0;
    } catch(PDOException $e) {
        return false;
    }
}
?>