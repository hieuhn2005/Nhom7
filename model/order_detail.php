<?php
//Thêm chi tiết sản phẩm của một đơn hàng vào bảng
function create_order_detail($order_id, $product_id, $quantity, $price, $total) {
    $sql = "INSERT INTO order_details (order_id, product_id, quantity, price, total) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $order_id, $product_id, $quantity, $price, $total);
}
// Lấy danh sách chi tiết sản phẩm của một đơn hàng 
function load_order_detail($order_id) {
    $sql = "SELECT d.product_id, d.quantity, d.price, d.total, p.name, p.img
            FROM order_details d
            JOIN sanpham p ON d.product_id = p.id
            JOIN orders o ON d.order_id = o.id
            WHERE o.id = ?";

    return pdo_query($sql, $order_id);
}
