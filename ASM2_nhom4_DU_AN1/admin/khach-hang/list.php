<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Khách hàng - danh sách</h1>
      <div class="card mb-4">
        <div class="card-body">






          <div class="row mb10">
            <table class="table table-bordered">
              <tr>

                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Kích hoạt</th>
                <th>Hình</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Actions</th>
              </tr>

              <?php
              foreach ($_SESSION['kh'] as $kh) {
                extract($kh);

                $suakh = "index.php?act=suakh&makh=" . $ma_kh;
                $xoakh = "index.php?act=xoakh&makh=" . $ma_kh;
                $hinhpath = "../upload/" . $hinh;
                if (is_file($hinhpath)) {
                  $hinh = "<img src='" . $hinhpath . "' height='60'>";
                } else {
                  $hinh = "ko tìm thấy ảnh";
                }

                echo '
          <tr>
        
          <td>' . $ma_kh . '</td>
          <td>' . $ho_ten . '</td>
          <td>' . $kich_hoat . '</td>
          <td>' . $hinh . '</td>
          <td>' . $email . '</td>
          <td>' . $vai_tro . '</td>

          <td>
           <a href="' . $suakh . '"  class="suabtn"><input type="button" value="Sửa"></a>
           <a href="' . $xoakh . '"   class="xoabtn"><input type="button" value="Xóa"></a>
          </td>
          </tr>
          ';
              }
              ?>

            </table>


          </div>


        </div>

  </main>
</div>