<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">BIỂU ĐỒ THỐNG KÊ</span>
</div>

<div id="piechart_3d" style="width: 900px; height: 500px"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Loại', 'Số Lượng'],
  <?php
    foreach($listTK as $item){
        echo "['$item[ten_loai]', $item[so_luong]],";
    }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'TỈ LỆ HÀNG HÓA', is3D: true};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
  chart.draw(data, options);
}
</script>