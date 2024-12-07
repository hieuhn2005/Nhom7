<?php
if (empty($cart_items)) {
    header("Location: index.php?act=cart");
    exit;
}
?>

<h2 class="checkout-title">Thông Tin Đặt Hàng</h2>

<form action="index.php?act=checkout" method="post" class="checkout-form">
    <div class="form-group">
        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="name" required placeholder="Nhập tên đầy đủ của bạn">
    </div>

    <div class="form-group">
        <label for="phone">Số điện thoại:</label>
        <input type="text" id="phone" name="phone" required placeholder="Nhập số điện thoại">
    </div>

    <div class="form-group">
        <label for="address">Địa chỉ giao hàng:</label>
        <textarea id="address" name="address" required placeholder="Nhập địa chỉ giao hàng" rows="4"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" name="checkout" class="submit-btn">Xác nhận đặt hàng</button>
    </div>
</form>
