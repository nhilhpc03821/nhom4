<?php
if (is_array($hh)) {
  extract($hh);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height='60'>";
} else {
  $hinh = "ko tìm thấy ảnh";
}

?>




<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Loại hàng - chỉnh sửa</h1>
      <div class="card mb-4">
        <div class="card-body">






    <form action="index.php?act=updatehh" method="post" class="formcontent mt" enctype="multipart/form-data">
      <input hidden type="text" name="mahh" value="<?php echo $ma_hh ?>">


      <br>
      <div class="row mb10">
        <select name="maloai" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listloai as $loai) {
            extract($loai);
            if ($ma_loai == $ma_Loai) {
              $s = "selected";
            } else {
              $s = "";
            }
            echo '<option value="' . $ma_loai . '"'.$s.'>' . $ten_loai . '</option>';
          }
          ?>

        </select>

      </div>


      <br />

      <div class="row mb10">
        Tên hàng hóa
        <br />
        <input type="text" name="tenhh" value="<?php echo $ten_hh ?>" />
      </div>
      <br />

      <div class="row mb10">
        Giá
        <br />
        <input type="text" name="giahh" value="<?php echo $don_gia ?>" />
      </div>
      <br />

      <div class="row mb10">
        Hình
        <br />
        <input type="file" name="hinhhh" value=""/>
        <?php echo $hinh ?>
      </div>
      <br />

      <div class="row mb10">
        Mô tả
        <br />
        <textarea name="motahh" id="" cols="30" rows="10">
              <?php echo $mo_ta ?>
              </textarea>
      </div>
      <br />




      <br />
      <input value="Cập nhật" type="submit" name="capnhathh"></input>
      <button type="reset">Nhập lại</button>
      <button><a href="index.php?act=listhh" style="text-decoration: none;">Danh sách hàng hóa</a></button>
      <?php

      if (isset($thongbao) && ($thongbao != "")) {
        echo "<br>" . $thongbao;
      }

      ?>
    </form>





    </div> 
      </div>
    </div>
  </main>
</div>