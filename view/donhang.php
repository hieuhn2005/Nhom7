<div class="col-9 main-content">
    <div class="producte">
        <h1>QUẢN LÝ ĐƠN HÀNG</h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Số lượng mặt hàng</th>
   
                <th>Tổng tiền</th>
                <th>Thời gian</th>
                <th>Trạng thái</th>
            
            </tr>
        </thead>

        <tbody>
<?php foreach ($orders as $order): ?>
    <?php extract($order); ?>
    <?php 
        // Giả sử bạn có hàm để lấy số lượng sản phẩm trong đơn hàng
        $product_count = load_product_count_by_order($id); // Hàm này cần được định nghĩa
    ?>
    <tr>
        <td>WDP_<?= $id ?></td>
        <td><?= $product_count ?></td> <!-- Hiển thị số lượng sản phẩm -->
        
        <td><?= number_format($total_amount, 0, ',', '.') ?> ₫</td>
        <td><?= $created_at ?></td>
        <td>Chờ xác nhận</td>
    </tr>
<?php endforeach; ?>
</tbody>
    </table>
</div><br><br>
