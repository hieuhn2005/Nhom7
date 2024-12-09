<?php
// Lấy dữ liệu thống kê doanh thu
$list_revenue_statistics = load_revenue_statistics();
?>

<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div id="myChart" style="width:100%; max-width:900px; height:800px;"></div>

    <script>
    // Load Google Charts library
    google.charts.load('current', {'packages':['corechart', 'bar']});
    
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Tạo dữ liệu cho biểu đồ
        var data = new google.visualization.DataTable();
        
        // Định nghĩa các cột trong bảng dữ liệu
        data.addColumn('string', 'Ngày');           // Cột cho ngày
        data.addColumn('number', 'Số đơn hàng');    // Cột cho số đơn hàng
        data.addColumn('number', 'Doanh thu');      // Cột cho doanh thu
        
        // Dữ liệu từ PHP (chuyển dữ liệu PHP sang JavaScript)
        var chartData = [
            <?php
            foreach ($list_revenue_statistics as $revenue) {
                echo "['" . $revenue['order_date'] . "', " . $revenue['total_orders'] . ", " . $revenue['total_revenue'] . "],";
            }
            ?>
        ];
        
        // Thêm dữ liệu vào bảng
        data.addRows(chartData);

        // Tạo biểu đồ cột
        var options = {
            title: 'Thống Kê Doanh Thu và Số Đơn Hàng',
            chartArea: {width: '50%'},
            hAxis: {
                title: 'Doanh thu',
                minValue: 0
            },
            vAxis: {
                title: 'Ngày'
            },
            seriesType: 'bars',  // Chọn biểu đồ cột
            series: {
                0: {targetAxisIndex: 0}, // Số đơn hàng
                1: {targetAxisIndex: 1}  // Doanh thu
            },
            isStacked: true
        };
        
        // Vẽ biểu đồ
        var chart = new google.visualization.ComboChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
    </script>
</body>
