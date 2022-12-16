<?php
session_start();
include "../dao/pdo.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";

if (isset($_GET['id'])) {
  $thong_tin_phong = load_onehh($_GET['id']);
} else {
  // header("location: index.php");
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
  <div class="img" style="text-align:center">
    <img id="img" class="baner_anh" onclick="changeImage()" src="../asset/dlient/img/banner_1.jpg  " width="1300px" height="450px">
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
        <p><span>GIÁ: <?= number_format($thong_tin_phong['don_gia'], 3, ',', '.') ?> </span> VNĐ/đêm</p>
        <button data-toggle="modal" data-target="#exampleModal">Đặt Phòng</button>
      </div>
    </div>
    <div class="mo-ta-phong">
      <?= $thong_tin_phong['mo_ta'] ?>
    </div>
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="4HSICplK"></script>
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div> -->
  </div>

  <!-- Modal -->
  <form action="xuli-donhang.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ĐẶT PHÒNG</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="ten_khach_hang">Tên của bạn: </label>
              <input type="text" name="ten_khach_hang" class="form-control" id="ten_khach_hang" placeholder="Vui lòng nhập họ tên của bạn!">
            </div>
            <div class="form-group">
              <label for="email">Email của bạn: </label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Vui lòng nhập email của bạn!">
            </div>
            <div class="form-group">
              <label for="so_dien_thoai">Số điện thoại</label>
              <input type="text" name="so_dien_thoai" class="form-control" id="so_dien_thoai" placeholder="Vui lòng nhập điện thoại của bạn!">
            </div>
            <div class="form-group">
              <label for="ngay_dat_phong">Ngày đặt</label>
              <input type="datetime-local" name="ngay_dat_phong" value="<?= date('Y-m-d G.i:ss time()') ?>" class="form-control" id="ngay_dat_phong" placeholder="Vui lòng nhập ngày đặt phòng của bạn!">
            </div>
            <div class="form-group">
              <label for="so_nguoi">Số người</label>
              <input type="number" min="1" name="so_nguoi" class="form-control" id="so_nguoi" placeholder="Vui lòng nhập số người!">
            </div>
            <div class="form-group">
              <label for="so_luong_phong">Số Lượng Phòng</label>
              <input type="number" min="1" name="so_luong_phong" class="form-control" id="so_luong_phong" placeholder="Vui lòng số lượng phòng">
            </div>
            <input type="hidden" name="ma_hh" value="<?= $_GET['id'] ?>">
            <input type="hidden" name="gia" value="<?= $thong_tin_phong['don_gia'] ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">HUỶ BỎ</button>
            <button type="submit" class="btn btn-primary">ĐẶT NGAY</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <?php
  require_once('../asset/dlient/page/footer.php')
  ?>















  </div>
</body>

</html>