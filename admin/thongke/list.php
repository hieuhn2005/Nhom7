<?php
$list_revenue_statistics = load_revenue_statistics();
?>
<div class="col-9 main-content">
    <div class="product">
        <h1>Thống Kê Doanh Thu</h1><br>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Ngày</th>
                <th>Số đơn hàng</th>
                <th>Doanh thu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_revenue_statistics as $revenue) {
                echo '
                    <tr>
                        <td>' . $revenue['order_date'] . '</td>
                        <td>' . $revenue['total_orders'] . '</td>
                        <td>' . number_format($revenue['total_revenue'], 0, ',', '.') . ' VND</td>
                    </tr>
                ';
            }
            ?>
        </tbody>
    </table>
</div>
