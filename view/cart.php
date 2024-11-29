<h2>Giỏ Hàng</h2>

<?php if (empty($cart_items)): ?>
    <p>Giỏ hàng của bạn hiện đang trống.</p>
<?php else: ?>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($cart_items as $item): ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= number_format($item['price'], 0, ',', '.') ?> VNĐ</td>
            <td>
                <form action="index.php" method="post">
                    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1">
                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                    <button type="submit" name="update_cart">Cập nhật</button>
                </form>
            </td>
            <td><?= number_format($item['total'], 0, ',', '.') ?> VNĐ</td>
            <td><a href="index.php?delete_cart=<?= $item['id'] ?>">Xóa</a></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <p><strong>Tổng cộng:</strong> <?= number_format(array_sum(array_column($cart_items, 'total')), 0, ',', '.') ?> VNĐ</p>

    <a href="checkout.php">Thanh toán</a>
<?php endif; ?>
