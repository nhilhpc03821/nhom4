<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Biểu đồ thống kê</h1>
      <div class="card mb-4">
        <div class="card-body"></div>

    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Tên hàng hóa', 'Số lượng'],
            <?php
            $i=1;
            $demdm=count($listtk);
foreach ($listtk as $tk) {
    extract($tk);
    if($i==$demdm){
        $phay="";
        echo "['".$ten_loai."', ".$so_luong."]".$phay."";
        $i++;
    }else{
        $phay=",";
        echo "['".$ten_loai."', ".$so_luong."]".$phay."";
        $i++;
    }
}
            ?>
        ]);

        var options = {
          title: 'Biểu đồ thống kê hàng hóa'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


    <center><div id="piechart" style="width: 900px; height: 500px;"></div></center>

    </div>
  </main>
</div>

