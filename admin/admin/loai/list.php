<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Phòng - Loại phòng</h1>
      <div class="card mb-4">
        <div class="card-body">



          <table id="datatablesSimple" style="width: 100%;border: 1px gray solid;" class="table table-bordered">
            <thead style="border-bottom: 2px solid black;">
              <tr>
                <th></th>
                <th>Mã Phòng</th>
                <th>Trạng Thái</th>
                <th>Ngày Đặt</th>
                <th> Ngày Trả</th>
                <th>Tên Khách Hàng</th>
                <th>cập nhật</th>
              </tr>
            </thead>

            <tbody>
              <?php
              foreach ($listloai as $loai) {
                extract($loai);

                $sualoai = "index.php?act=sualoai&maloai=" . $ma_loai;
                $xoaloai = "index.php?act=xoaloai&maloai=" . $ma_loai;

                echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>' . $ma_loai . '</td>
          <td>' . $ten_loai . '</td>

          <td>' . $ten_loai . '</td> <!-- ngày đặt -->
          <td> </td>
          
          </td>  <td>
          <td>
          <a href="' . $sualoai . '" class="suabtn"><input type="button" value="Sửa"></a>
          <a href="' . $xoaloai . '" class="xoabtn"><input type="button" value="Xóa"></a>
          <?td>
         
          </tr>
          ';
              }
              ?>

            </tbody>
          </table>







        </div>
      </div>


      <form action="" class="mt">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <button><a href="index.php?act=addloai">Nhập thêm</a></button>
      </form>



    </div>
  </main>
</div>