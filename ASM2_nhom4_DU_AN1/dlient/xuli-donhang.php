<?php
session_start();
include "../dao/pdo.php";
include "../dao/don-hang.php";

if (
    isset($_POST['ten_khach_hang']) &&
    isset($_POST['email']) &&
    isset($_POST['so_dien_thoai']) &&
    isset($_POST['ngay_dat_phong']) &&
    isset($_POST['so_nguoi']) &&
    isset($_POST['so_luong_phong']) &&
    isset($_POST['ma_hh']) &&
    isset($_POST['gia'])
) {
    tao_don_hang(
        $_POST['ten_khach_hang'],
        $_POST['email'],
        $_POST['so_dien_thoai'],
        $_POST['ngay_dat_phong'],
        $_POST['so_nguoi'],
        $_POST['so_luong_phong'],
        $_POST['ma_hh'],
        $_POST['gia']
    );

}
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
<div style="min-height: 100vh; padding: 120px 0;">
    <div class="container">
        <div class="card">
            <div class="card-header">
                CẢM ƠN BẠN ĐÃ ĐẶT PHÒNG
            </div>
            <div class="card-body">
                <h5 class="card-title">Thông tin bạn vừa đặt</h5>
                <table class="w-100">
                    <tbody>
                        <tr>
                            <th  style="width: 20%" scope="row"><strong>Họ tên:</strong></th>
                            <td   style="width: 80%"><?= $_POST['ten_khach_hang'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>Email:</strong></th>
                            <td><?= $_POST['email'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>Điện thoại:</strong></th>
                            <td><?= $_POST['so_dien_thoai'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>Ngày đặt:</strong></th>
                            <td><?= $_POST['ngay_dat_phong'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>Số người:</strong></th>
                            <td><?= $_POST['so_nguoi'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>Giá:</strong></th>
                            <td><?= $_POST['gia'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="/" class="btn btn-primary">QUAY LẠI TRANG CHỦ</a>
            </div>
        </div>
    </div>
</div>

  <?php
  require_once('../asset/dlient/page/footer.php')
  ?>
  </div>
</body>

</html>