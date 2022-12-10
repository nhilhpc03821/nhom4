<?php
session_start();
include "../dao/pdo.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Gioi Thieu 1 </title>
  <script src="../asset/dlient/JS/index.js"></script>

  <link href="../asset/dlient/CSS/index.css" rel="stylesheet">

  <link href="../asset/dlient/CSS/sanpham.css" rel="stylesheet">

  <link href="../asset/dlient/JS/sanpham.js" rel="stylesheet">

  <link href="../asset/dlient/JS/sanpham_1.js" rel="stylesheet">
</head>

<body>
  <?php
  require_once('../asset/dlient/page/header.php');
  ?>


  <!-- js -->
  <div class="img">
    <center>
      <img id="img" class="baner_anh" onclick="changeImage()" src="../asset/dlient/img/banner_1.jpg  " width="1300px" height="450px">
    </center>
    <img>
  </div>





  <hr class="thanh_ngang">

  <div class="wrapper">

    <div class="hinh-anh">
      <a href="../dlient/chitietphong.php">
        <?php if ($hinhpath != '../upload/') : ?>
          <img src="<?= $hinhpath ?>" alt="Cinque Terre" width="500" height="200">
        <?php endif; ?>
      </a>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Phòng Đơn VIP1 hai giường</h1>

        <p>Include: Pure Water, Coffee, Wifi, Tax, Service.<br />

          Tận hưởng kỳ nghỉ của bạn tại Khách Sạn Á Châu, dịch vụ cao cấp, sạch sẻ sang trọng bật nhất tại Cần Thơ

        </p>
      </div>
      <div class="product-price-btn"><br /><br /><br />
        <p><span>GIÁ : 1.500.000</span>VNĐ/đêm</p>

        <form action="xuli-donhang.php" method="post">
          <input type="hidden">
          <button>Đặt Phòng</button>
        </form>

      </div>
    </div>
  </div>

  </center>




  <?php
  require_once('../asset/dlient/page/footer.php')
  ?>















  </div>
</body>

</html>