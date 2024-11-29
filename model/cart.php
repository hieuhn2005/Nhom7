<?php
// Thêm sản phẩm vào giỏ hàng
function add_to_cart($user_id, $product_id, $quantity) {
    $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)";
    pdo_execute($sql, $user_id, $product_id, $quantity);
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
function update_cart($user_id, $product_id, $quantity) {
    $sql = "UPDATE cart SET quantity = ? WHERE user_id = ? AND product_id = ?";
    pdo_execute($sql, (int)$quantity, (int)$user_id, (int)$product_id);
}

// Lấy giỏ hàng của người dùng
function get_cart($user_id) {
    $sql = "SELECT c.id, c.product_id, p.name, p.price, c.quantity, (p.price * c.quantity) AS total
            FROM cart c
            JOIN sanpham p ON c.product_id = p.id
            WHERE c.user_id = ?";
    return pdo_query($sql, $user_id);
}

// Xóa sản phẩm khỏi giỏ hàng
function delete_from_cart($cart_id) {
    $sql = "DELETE FROM cart WHERE id = ?";
    pdo_execute($sql, $cart_id);
}

// Xóa tất cả sản phẩm trong giỏ hàng
function clear_cart($user_id) {
    $sql = "DELETE FROM cart WHERE user_id = ?";
    pdo_execute($sql, $user_id);
}
?>
