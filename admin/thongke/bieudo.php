<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div id="myChart" style="width:100%; max-width:900px; height:800px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
 
  ['Contry', 'số lượng'],
  // ['Italy',55],
  // ['France',49],
  // ['Spain',44],
  // ['USA',24],
  // ['Argentina',15]
  <?php
  $tongdm=count($listthongke);
  $i=1;
  foreach ($listthongke as $thongke) {
    extract($thongke);
    if($i==$tongdm) $dauphay=""; else $dauphay=",";
    echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
    $i+=1;
  }

  ?>
]);

// Set Options
const options = {
  title:'Biểu đồ Thống kê sản phẩm'
};

// Draw
const chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>