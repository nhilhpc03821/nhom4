<?php
session_start();
include "../dao/pdo.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";


$listloai = load_list();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Trang Chu </title>
  <link rel="shortcut icon" type="image/png" href="../asset/dlient/img/icon/avt.png" />

  <script src="../asset/dlient/JS/index.js"></script>

  <!-- <<<<<<< HEAD -->


  <link href="../asset/dlient/CSS/index.css" rel="stylesheet">



  <!-- css footer -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


</head>



<body>


  <?php
  require_once('../asset/dlient/page/header.php');
  ?>



  <div class="banner text-center" style="margin-top: 78px;">
    <img id="img" class="baner_anh" onclick="changeImage()" src="../asset/dlient/img/banner_1.jpg  " width="100%" height="600px">

    <img src="../asset/dlient/img/icon/avt.png">
  </div>

  <!-- end show -->

  <!-- About Start -->
  <div class="container">

    <br />
    <div class="gioi-thieu-ngan">
      <h3>Chào mừng đến với THE UNIVERSE</h3>
      <p>THE UNIVERSE với các phòng biệt thự và bungalow được trang bị đầy đủ tiện nghi, không
        gian bên trong được bài trí theo phong cách sang trọng pha trộn những nét truyền
        thống của người Việt và những nét hiện đại của phương Tây.
        <br />
        Chúng tôi có đội ngũ nhân viên được đào tạo bài bản, chuyên nghiệp và tác phongchuyên
        nghiệp, phục vụ tận tình.Luxe Hotel tự tin mang đến cho bạn sự thăng hoa về cảm xúc,
        những trải nghiệm tốt nhất, tuyệt vời nhất trong kỳ nghỉ dưỡng của bạn . Hãy đến với
        chúng tôi, chúng tôi đảm bảo rằng bạn sẽ không hối tiếc.
      </p>
      <img class="anh_hotel" src="../asset/dlient/img/gioi_thieu.jpg" width="100%" style="margin-bottom: 50px;">
    </div>
  </div>





  <?php foreach ($listloai as $loai_phong) :
    if ($loai_phong['ma_loai'] != 0) :
      $danh_sach_phong = load_listhh("", $loai_phong['ma_loai']);

      if (!empty($danh_sach_phong)) :
  ?>

        <div class="tieu-de  container"><b> <?= $loai_phong['ten_loai'] ?></b> </div>




        <div class=" danh-sach-san-pham">
          <?php foreach ($danh_sach_phong as $phong) :
            $hinhpath = "../upload/" . $phong['hinh'];
          ?>
            <div class="san-pham">
              <div class="gallery">
                <div class="hinh-anh">
                  <a href="../dlient/chitietphong.php?id=<?= $phong['ma_hh'] ?>">
                    <?php if ($hinhpath != '../upload/') : ?>
                      <img src="<?= $hinhpath ?>" alt="Cinque Terre" width="600" height="200">
                    <?php endif; ?>
                  </a>
                </div>
                <div class="desc"><a href="../dlient/chitietphong.php?id=<?= $phong['ma_hh'] ?>"><b><?= $phong['ten_hh'] ?></b></a></div>
                <div class="desc"><a href="../dlient/chitietphong.php?id=<?= $phong['ma_hh'] ?>"><b><?= number_format($phong['don_gia'], 3, ',', '.') ?> VND</b></a></div>
              </div>
            </div>
        <?php

          endforeach;
        endif;
        ?>
        </div>

    <?php endif;
  endforeach; ?>




    <div class="tieu-de  container"><b>loại hình sắp ra mắt</b></div>



    <div class="container">


      <h5>Home Stay</h5>

      <div class="sap-ra-mat text-center">
        <img class="sticky" src="../asset/dlient/img/phonh_tongthong.jpg" alt="Avatar">
        <i>Dự kiến ra mắt vào tháng 6/ 2023</i>
      </div>


      <p class="chu_2">Home Stay có diện tích rộng đến 313m², nạn có thể thuê với giá một ngày 1 triệu VND hoặc tuần với giá 5 triệu VND
        gồm có 2 phòng ngủ, một phòng ăn, một phòng khách và một phòng làm việc riêng.<br />
        Hầu hết nội thất trong phòng đều được chế tác từ những vật liệu cao cấp với chất lượng tốt nhất theo phong tiêu chuẩn 4- 5 sao với tất cả
        nội thất tại đây đều được trang bị từ những thương hiệu nội thất danh tiếng đến từ Italia như: Colombostile, Baldi Home Art, VG New Trend...
      </p>
    </div>

    <div class="container">
      <br />

      <h5>Bể Bơi</h5>
      <div class="sap-ra-mat text-center">
        <img class="sticky" src="../asset/dlient/img/be-boi.jpeg  " alt="Avatar">
        <i>Dự kiến ra mắt vào cuối năm 2023</i>
      </div>

      <p class="chu_2">Nhằm phục vụ nhu cầu của khách hàng, chúng tôi đã tạo ra <b>bể bơi </b>tại trung tâm hoặc mặt sau của khách sạn để quý khách có thể thư giản hoặc
        tổ chức các loại hình giải trí khác ...
      </p>
    </div>

    <div class="container">
      <br />
      <h5>Phòng Mới</h5>
      <div class="sap-ra-mat text-center">
        <img class="sticky" src="../asset/dlient/img/phong_tong_thong_3.jpg  " alt="Avatar">
        <i>Dự kiến ra mắt vào cuối năm 2023</i>
      </div>
      <p class="chu_2">
        Phòng có không gian phòng đặc biệt, 2 tivi lớn 47 inch cùng hệ thống âm thanh hiện đại. Riêng
        phòng khách đã chiếm trọn gần một nửa tổng diện tích sử dụng chung.
        <br />
        Những món đồ decor trong phòng thường mang đậm dấu ấn của văn hóa truyền thống Việt Nam với 3 gam màu chủ đạo là trắng,
        đen và nâu đỏ sang trọng. Với mức giá<b>1,2 tr/đêm 6 tr/đêm 10tr/tháng</b>, J.W Marriott hiện là khách sạn có giá
        phòng Tổng thống cao nhất Hà Nội.


      </p>
    </div>




    <div class="tieu-de  container"><b>sơ lược về Khách sạn</b></div>



    <div class="so-luoc">

      <div class="so-luoc-noi-dung container">

        <div class="hinh-anh">
          <img src="../asset/dlient/img/gioi_thieu3.jpg" alt="Jane">

        </div>
        <div class="chi-tiet-noi-dung">
          <h4> Vị Trí Đắc Địa</h4>
          <p> Tọa lạc tại vị trí đắc địa của trung tâm thành phố với hai mặt tiền tiếp giáp hai dòng sông
            Cần Thơ và sông Hậu hiền hòa, ngay cạnh khuôn viên Bến Ninh Kiều thơ mộng và cầu đi bộ lộng lẫy về đêm,
            gần các siêu thị, trung tâm mua sắm hiện đại, bảo tàng thành phố và khu công viên cây xanh chỉ với 15 phút đi bộ.</p>
        </div>
      </div>

      <div class="so-luoc-noi-dung container">

        <div class="hinh-anh">
          <img src="../asset/dlient/img/gioi_thieu4.jpg" alt="Jane">
        </div>
        <div class="chi-tiet-noi-dung ">
          <h4>Không Gian Khách Sạn </h4>
          <p>Mang Phong cách Hàn Quốc không gian nhẹ nhàng yên tĩnh cùng nhiều góc
            chụp sống ảo đẹp và bạn như chìm vào chuỗi ngày bình yên mà quên hết đi
            những mệt mỏi, bon chen thường nhật</p>
        </div>
      </div>


      <div class="so-luoc-noi-dung container">
        <div class="hinh-anh">
          <img src="../asset/dlient/img/nhan_vien_1.jpg" alt="John">

        </div>
        <div class="chi-tiet-noi-dung">
          <h4> Nguyên Liệu Sạch</h4>
          <p>Nguyên liệu dùng để làm bánh và pha chế nước uống tại quán có nguồn góc
            rõ ràng không có chất bảo quản , đảm bảo an toàn vệ sinh thực phẩm</p>
        </div>
      </div>
    </div>





    <?php
    require_once('../asset/dlient/page/footer.php')
    ?>


</body>

</html>