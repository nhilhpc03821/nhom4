

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Khách hàng - chỉnh sửa</h1>
      <div class="card mb-4">
        <div class="card-body">

<?php
if (is_array($kh)) {
  extract($kh);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height='60'>";
} else {
  $hinh = "ko tìm thấy ảnh";
}
?>





    <form action="index.php?act=updatekh" method="post" class="formcontent mt" enctype="multipart/form-data">
      <input hidden type="text" name="makh" value="<?php echo $ma_kh ?>">
      <br />
      <div class="row mb10">
        Mã khách hàng
        <br />
        <input type="text" name="makh" value="<?php echo $ma_kh?>" disabled/>
      </div>
      <br>
      <div class="row mb10">
        Tên khách hàng
        <br />
        <input type="text" name="tenkh" value="<?php echo $ho_ten ?>" />
      </div>
      <br />

      <div class="row mb10">
        Email
        <br />
        <input type="email" name="email" value="<?php echo $email ?>" />
      </div>
      <br />

      <div class="row mb10">
        Hình
        <br />
        <input type="file" name="hinh" value="" />
        <?php echo $hinh ?>
      </div>
      <br />

      <div class="row mb10">
        Vai trò
        <br />
       <input type="text" name="vaitro" id="" placeholder="Vai trò 0: khách, 1: admin" value="<?php echo $vai_tro ?>" >
      </div>
      <br />




      <br />
      <input value="Cập nhật" type="submit" name="capnhatkh"></input>
      <button type="reset">Nhập lại</button>
      <button><a href="index.php?act=dskh" style="text-decoration: none;">Danh sách khách hàng</a></button>
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
