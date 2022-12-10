<?php
session_start();
include "../dao/pdo.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";

if (isset($_GET['id'])) {
  $thong_tin_phong = load_onehh($_GET['id']);
  var_dump($thong_tin_phong);
} else {
  //chuyển hướng nó ra trang chủ/// Location:php
}
$hinhpath = "../upload/" . $thong_tin_phong['hinh'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $thong_tin_phong['ten_hh'] ?> </title>
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
      <?php if ($hinhpath != '../upload/') : ?>
        <img src="<?= $hinhpath ?>" alt="Cinque Terre" width="500" height="200">
      <?php endif; ?>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?= $thong_tin_phong['ten_hh'] ?></h1>
        <p><?= $thong_tin_phong['mo_ta'] ?>
        </p>
      </div>
      <div class="product-price-btn"><br /><br /><br />
        <p><span>GIÁ: <?= number_format($phong['don_gia'], 0, ',', '.') ?> </span>VNĐ/đêm</p>
        <form action="xuli-donhang.php?id=<?= $thong_tin_phong['ma_hh'] ?>" method="post">
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