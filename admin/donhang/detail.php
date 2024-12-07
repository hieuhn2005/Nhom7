<div class="col-9 main-content">
    <div class="product">
        <h1>CHI TIẾT ĐƠN HÀNG</h1>
    </div>

    <div>ID: <?= $order['id'] ?></div>
    <div>Tên Khách Hàng: <?= $order['name'] ?></div>
    <div>Số điện thoại: <?= $order['phone'] ?></div>
    <div>Địa chỉ: <?= $order['shipping_address'] ?></div>
    <div>Tổng tiền: <?= number_format($order['total_amount'], 0, ',', '.') ?> ₫</div>
    <div>Thời gian: <?= $order['created_at'] ?></div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($order_detail as $detail): ?>
        <?php extract($detail); ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= number_format($price, 0, ',', '.') ?> ₫</td>
                <td><?= $quantity ?></td>
                <td><?= number_format($total, 0, ',', '.') ?> ₫</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
