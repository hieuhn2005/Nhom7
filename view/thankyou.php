<?php
if (!$order) {
    header("Location: index.php");
    exit;
}
?>

<div>Cảm ơn bạn đã đặt hàng</div>
<div>Thôn tin đơn hàng</div>
<div>ID Đơn hàng: <?= $order['order_id'] ?></div>
<div>Tên: <?= $order['name'] ?></div>
<div>Địa chỉ: <?= $order['address'] ?></div>
<div>SĐT: <?= $order['phone'] ?></div>
<div>Tổng tiền: <?= $order['total_amount'] ?></div>
