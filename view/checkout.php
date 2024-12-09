<?php
if (empty($cart_items)) {
    header("Location: index.php?act=cart");
    exit;
}
?>

<div class="dathangne">
<?php if (empty($cart_items)): ?>
    <p class="empty-cart">Giỏ hàng của bạn hiện đang trống.</p>
<?php else: ?>
    <table border=1>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
            <!-- <th>Hành động</th> -->
        </tr>
        <?php foreach ($cart_items as $item): ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= number_format($item['price'], 0, ',', '.') ?> VNĐ</td>
            <td>
                <form action="index.php" method="post">
                    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1">
                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                    <!-- <button type="submit" name="update_cart">Cập nhật</button> -->
                </form>
            </td>
            <td><?= number_format($item['total'], 0, ',', '.') ?> VNĐ</td>
            <!-- <td><a href="index.php?delete_cart=<?= $item['id'] ?>">Xóa</a></td> -->
        </tr>
        <?php endforeach; ?>
    </table>

        <p class="total-amount"><strong>Tổng cộng:</strong> <?= number_format(array_sum(array_column($cart_items, 'total')), 0, ',', '.') ?> VNĐ</p>

    </div>
<?php endif; ?>


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

</div><br><br>
