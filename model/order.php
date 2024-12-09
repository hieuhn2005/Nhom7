<?php
//  Tạo một đơn hàng mới trong bảng
function create_order($user_id, $name, $total_amount, $shipping_address, $phone) {
    $sql = "INSERT INTO orders (user_id, name, total_amount, shipping_address, phone) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $user_id, $name, $total_amount, $shipping_address, $phone);
}
// Lấy toàn bộ danh sách các đơn hàng từ bảng
function loadall_order() {
    $sql = "select * from orders order by id desc";
    return pdo_query($sql);
}
// Lấy thông tin chi tiết của một đơn hàng cụ thể
function loadone_order($order_id) {
    $sql = "select * from orders where id = ?";
    return pdo_query_one($sql, $order_id);
}

// Thống kê doanh thu từ bảng
function load_revenue_statistics() {
    $sql = "SELECT DATE(created_at) as order_date, SUM(total_amount) as total_revenue, COUNT(id) as total_orders
            FROM orders
            GROUP BY DATE(created_at)
            ORDER BY order_date DESC";
    return pdo_query($sql);
}
