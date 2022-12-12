

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Thống kê hàng hóa</h1>
      <div class="card mb-4">
        <div class="card-body"></div>




      <table class="table table-bordered">
        <tr>
          
          <th>Loại hàng</th>
          <th>Số lượng</th>
          <th>Gía thấp nhất</th>
          <th>Giá cao nhất</th>
          <th>Giá trung bình</th>
        </tr>
       
        <?php
          foreach ($listtk as $tk) {
            extract($tk);
            
          echo '
          <tr>
        
          <td>'.$ten_loai.'</td>
          <td>'.$so_luong.'</td>
          <td>'.$gia_min.'</td>
          <td>'.$gia_max.'</td>
          <td>'.$gia_avg.'</td>
          </tr>
          ';
          }
          ?>
          
   
      </table>
      <br>
      <form action="" class="mt">
        <button><a href="index.php?act=bdtk">Biểu đồ thống kê</a></button>
      </form>




      </div>
  </main>
</div>