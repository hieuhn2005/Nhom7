<div class="col-9 main-content">
    <div class="product">
        <h1>QUẢN LÝ ĐƠN HÀNG</h1><br>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Tổng tiền</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($orders as $order): ?>
        <?php extract($order); ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $phone ?></td>
                <td><?= $shipping_address ?></td>
                <td><?= number_format($total_amount, 0, ',', '.') ?> ₫</td>
                <td><?= $created_at ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
