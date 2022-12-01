<?php
if (is_array($hh)) {
  extract($hh);
}
$cat = $hh['ma_loai'];
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
                <?php
                foreach ($listloai as $loai) {
                  extract($loai);
                  if ($cat == $ma_loai) {
                    $s = "selected";
                  } else {
                    $s = "";
                  }
                  echo '<option value="' . $ma_loai . '"' . $s . '>' . $ten_loai . '</option>';
                }
                ?>

              </select>

            </div>


            <br />

            <div class="row mb10">
              <label for="">Tên Phòng</label>
              <br />
              <input type="text" name="tenhh" value="<?php echo $ten_hh ?>" />
            </div>
            <br />

            <div class="row mb10">
              <label for="">Giá</label>
              <br />
              <input type="text" name="giahh" value="<?php echo $don_gia ?>" />
            </div>
            <br />

            <div class="row mb10">
              <label for="">Hình</label>
              <br />
              <input type="file" name="hinhhh" value="" />
              <?php echo $hinh ?>
            </div>
            <br />

            <div class="row mb10">
              <label for="editor">Mô tả</label>
              <textarea name="motahh" id="editor" cols="30" rows="10">
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