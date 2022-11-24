

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Danh sách bình luận</h1>
      <div class="card mb-4">
        <div class="card-body">




      <table class="table table-bordered" style="width: 100%;">
        <tr>
            <th></th>
          <th>Mã bình luận</th>
          <th>Nội dung</th>
          <th>Mã khách hàng</th>
          <th>Mã hàng hóa</th>
          <th>Ngày bình luận</th>
          <th>Action</th>

        </tr>
       
        <?php
          foreach ($listbl as $bl) {
            extract($bl);

            $xoabl="index.php?act=xoabl&mabl=".$ma_bl;
            
          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>'.$ma_bl.'</td>
          <td>'.$noi_dung.'</td>
          <td>'.$ma_kh.'</td>
          <td>'.$ma_hh.'</td>
          <td>'.$ngay_bl.'</td>
          <td>
           <a href="'.$xoabl.'" class="xoabtn"><input type="button" value="Xóa"></a>
          </td>
          </tr>
          ';
          }
          ?>
          
   
      </table>
      </div>
  </div>
      <form action="" class="mt">
        <input type="button" value="chọn tất cả">
        <input type="button" value="bỏ chọn tất cả">
        <input type="button" value="xóa các mục đã chọn">
      </form>

  
   </div>
  </main>
</div>