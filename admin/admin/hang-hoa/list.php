
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Hàng hóa - danh sách</h1>
      <div class="card mb-4">
        <div class="card-body">





 
    <form action="index.php?act=listhh" method="post" class="mt" style="margin-bottom: 10px;">

      <input type="text" name="kw">
      <select name="maloai" id="">
        <option value="0" selected>Tất cả</option>
        <?php
        foreach ($listloai as $loai) {
          extract($loai);
          echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
        }
        ?>
        
      </select>
      <input type="submit" name="listok" value="Tìm kiếm">

    </form>
    <div class="row mb10">
      <table class="table table-bordered">
        <tr>
          <th></th>
          <th>Mã hàng hóa</th>
          <th>Tên hàng hóa</th>
          <th>Giá</th>
          <th>Hình</th>
          <th>Mô tả</th>
          <th>Lượt xem</th>
          <th>Actions</th>
        </tr>

        <?php
        foreach ($listhh as $hh) {
          extract($hh);

          $suahh = "index.php?act=suahh&mahh=" . $ma_hh;
          $xoahh = "index.php?act=xoahh&mahh=" . $ma_hh;
          $hinhpath = "../upload/" . $hinh;
          if (is_file($hinhpath)) {
            $hinh = "<img src='" . $hinhpath . "' height='60'>";
          } else {
            $hinh = "ko tìm thấy ảnh";
          }

          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>' . $ma_hh . '</td>
          <td>' . $ten_hh . '</td>
          <td>' . $don_gia . '</td>
          <td>' . $hinh . '</td>
          <td>' . $mo_ta . '</td>
          <td>' . $so_luot_xem . '</td>

          <td>
           <a href="' . $suahh . '"  class="suabtn"><input type="button" value="Sửa"></a>
           <a href="' . $xoahh . '"   class="xoabtn"><input type="button" value="Xóa"></a>
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
        <button><a href="index.php?act=addhh">nhập thêm</a></button>
      </form>



      </div>
  </main>
</div>