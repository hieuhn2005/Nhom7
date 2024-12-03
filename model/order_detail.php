<?php

function create_order_detail($order_id, $product_id, $quantity, $price, $total) {
    $sql = "INSERT INTO order_details (order_id, product_id, quantity, price, total) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $order_id, $product_id, $quantity, $price, $total);
}
