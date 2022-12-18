<?php
session_start();
include "../dao/pdo.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";



if (isset($_GET['loai'])) {
  $danh_sach_phong = load_listhh("", $_GET['loai']);
  $loai_phong = load_one($_GET['loai']);
} else {

  $danh_sach_phong = load_listhh("", 1);

  $loai_phong = load_one(1);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Phòng Đơn</title>
  <script src="../asset/dlient/JS/index.js"></script>

  <link href="../asset/dlient/CSS/index.css" rel="stylesheet">

  <link href="../asset/dlient/CSS/sanpham.css" rel="stylesheet">

  <link href="../asset/dlient/JS/sanpham.js" rel="stylesheet">

  <link href="../asset/dlient/JS/sanpham_1.js" rel="stylesheet">
</head>

<body>
  <!-- nav -->

  <?php
  require_once('../asset/dlient/page/header.php')
  ?>



  <!-- js -->
  <div class="img">
    <center>
      <img id="img" class="baner_anh" onclick="changeImage()" src="../asset/dlient/img/banner_1.jpg  " width="1300px" height="450px">
    </center>
    <img>
  </div>






  <!-- noi dung -->


  <?php
  $danh_sach_phong = load_listhh("", $loai_phong['ma_loai']);

  if (!empty($danh_sach_phong)) :
  ?>

    <hr class="thanh_ngang">
    <h2 class="tieu-de text-center"><?= $loai_phong['ten_loai'] ?> </h2>

    <div class="danh-sach-san-pham">
      <?php foreach ($danh_sach_phong as $phong) :
        $hinhpath = "../upload/" . $phong['hinh'];
      ?>
        <div class="san-pham">
          <div class="gallery">
            <div class="hinh-anh">
              <a href="../dlient/chitietphong.php?id=<?= $phong['ma_hh'] ?>">
                <?php if ($hinhpath != '../upload/') : ?>
                  <img src="<?= $hinhpath ?>" alt="Cinque Terre">
                <?php endif; ?>
              </a>
            </div>
            <div class="desc"><a href="../dlient/chitietphong.php"><b><?= $phong['ten_hh'] ?></b></a></div>
            <div class="desc"><a href="../dlient/chitietphong.php"><b><?= number_format($phong['don_gia'], 0, ',', '.') ?>.000 VND</b></a></div>
          </div>
        </div>
    <?php

      endforeach;
    endif;
    ?>
    </div>
    <?php
    require_once('../asset/dlient/page/footer.php')
    ?>













    </div>
</body>

</html>