<?php
session_start();
include "../dao/pdo.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";

if (isset($_GET['id'])) {
  $thong_tin_phong = load_onehh($_GET['id']);
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

  <div class="wrapper thong-tin-phong">

    <div class="hinh-anh product-img">
      <?php if ($hinhpath != '../upload/') : ?>
        <img src="<?= $hinhpath ?>" alt="Cinque Terre" width="500" height="200">
      <?php endif; ?>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?= $thong_tin_phong['ten_hh'] ?></h1>

      </div>
      <div class="product-price-btn"><br /><br /><br />
        <p><span>GIÁ: <?= number_format($thong_tin_phong['don_gia'], 0, ',', '.') ?> </span>VNĐ/đêm</p>
        <form action="xuli-donhang.php?id=<?= $thong_tin_phong['ma_hh'] ?>" method="post">
          <input type="hidden">
          <button>Đặt Phòng</button>
        </form>
      </div>
    </div>
    <div class="mo-ta-phong">
      <?= $thong_tin_phong['mo_ta'] ?>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="4HSICplK"></script>
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
  </div>


  </center>




  <?php
  require_once('../asset/dlient/page/footer.php')
  ?>















  </div>
</body>

</html>