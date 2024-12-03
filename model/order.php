<?php

function create_order($user_id, $name, $total_amount, $shipping_address, $phone) {
    $sql = "INSERT INTO orders (user_id, name, total_amount, shipping_address, phone) VALUES (?, ?, ?, ?, ?)";
    return pdo_execute($sql, $user_id, $name, $total_amount, $shipping_address, $phone);
}
