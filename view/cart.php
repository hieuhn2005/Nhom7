<h2 class="cart-title">Giỏ Hàng</h2>

<?php if (empty($cart_items)): ?>
    <p class="empty-cart">Giỏ hàng của bạn hiện đang trống.</p>
<?php else: ?>
    <div class="cart-container">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart_items as $item): ?>
                <tr>
                    <td class="product-name"><?= $item['name'] ?></td>
                    <td class="product-price"><?= number_format($item['price'], 0, ',', '.') ?> VNĐ</td>
                    <td class="product-quantity">
                        <form action="index.php" method="post">
                            <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1" class="quantity-input">
                            <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                            <button type="submit" name="update_cart" class="update-btn">Cập nhật</button>
                        </form>
                    </td>
                    <td class="product-total"><?= number_format($item['total'], 0, ',', '.') ?> VNĐ</td>
                    <td class="product-action"><a href="index.php?delete_cart=<?= $item['id'] ?>" class="delete-btn">Xóa</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p class="total-amount"><strong>Tổng cộng:</strong> <?= number_format(array_sum(array_column($cart_items, 'total')), 0, ',', '.') ?> VNĐ</p>

        <form action="checkout.php" method="get">
            <button type="submit" class="checkout-btn">Đặt hàng</button>
        </form>
    </div>
<?php endif; ?>
