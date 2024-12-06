<?php

function create_order($user_id, $name, $total_amount, $shipping_address, $phone) {
    $sql = "INSERT INTO orders (user_id, name, total_amount, shipping_address, phone) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $user_id, $name, $total_amount, $shipping_address, $phone);
}

function loadall_order() {
    $sql = "select * from orders order by id desc";
    return pdo_query($sql);
}

function loadone_order($order_id) {
    $sql = "select * from orders where id = ?";
    return pdo_query_one($sql, $order_id);
}
