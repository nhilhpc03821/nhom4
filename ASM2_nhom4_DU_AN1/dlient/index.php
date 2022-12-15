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
    <img id="img" class="baner_anh" onclick="changeImage()" src="../asset/dlient/img/banner_1.jpg  " width="100%" height="700px">

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
        <hr class="sep-2" />
        <h2 class="tieu-de text-center"><?= $loai_phong['ten_loai'] ?> </h2>




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




    <hr class="sep-2" />
    <h2 class="chu_02 text-center"> Phòng Tổng Thống Sắp Có Tại Khách Sạn</h2>



    <div class="container">


      <h3 class="chu_1">Phòng Tổng Thống VIP1
        </h2>

        <img class="sticky" src="../asset/dlient/img/phonh_tongthong.jpg" alt="Avatar" width="400px">
        <p class="chu_2">Phòng Tổng Thống VIP1 có diện tích rộng đến 313m², giá một đêm là 15.000
          đô-la Mỹ (khoảng gần 340 triệu đồng, chưa bao gồm VAT)gồm có 2 phòng ngủ, một phòng ăn, một phòng khách cà một phòng làm việc riêng.<br />
          Hầu hết nội thất trong phòng đều được chế tác từ những vật liệu xa xỉ như vàng, cẩm thạch, đá quý...theo phong cách quý tộc. Ngoài ra,
          nội thất tại đây đều được trang bị từ những thương hiệu nội thất danh tiếng đến từ Italia như: Colombostile, Baldi Home Art, VG New Trend.
        </p>
    </div>

    <div class="container">
      <br />

      <h2 class="chu_1">Phòng Tổng Thống VIP2</h2>
      <img class="sticky" src="../asset/dlient/img/phong_tong_thong_2.jpg" alt="Avatar" width="400px">


      <p class="chu_2">Phòng Tổng Thống VIP2 căn phòng có 4 phòng ngủ, 5 phòng tắm, phòng Tổng thống tại
        khách sạnCăn phòng có diện tích lên tới 1.000m2 này khiến ai nghe qua đều cảm thấy choáng váng về
        quy mô, không gian này đã vượt xa diện tích nhiều phòng President Suite đẳng cấp tại Việt Nam, thông
        thường chỉ tầm khoảng 200 - 400m2.
        <br />
        Đặc biệt, căn phòng President Suite là sự lựa chọn hoàn hảo đến từng centimet cho những vị khách có mong
        muốn thưởng thức trọn vẹn bức tranh màu xanh ngọc bích của thiên nhiên vịnh Hạ Long dưới góc nhìn 360 độ.
      </p>
    </div>

    <div class="container">
      <br />
      <h2 class="chu_1">Phòng Tổng Thống VIP3</h2>
      <img class="sticky" src="../asset/dlient/img/phong_tong_thong_3.jpg" alt="Avatar" width="300px">

      <p class="chu_2">
        Phòng Tổng Thống VIP3 có tất cả 8 gian phòng riêng biệt, 3 tivi lớn 47 inch cùng hệ thống âm thanh hiện đại. Riêng
        phòng khách đã chiếm trọn gần một nửa tổng diện tích sử dụng chung.
        <br />
        Những món đồ decor trong phòng thường mang đậm dấu ấn của văn hóa truyền thống Việt Nam với 3 gam màu chủ đạo là trắng,
        đen và nâu đỏ sang trọng. Với mức giá 7.000 USD mỗi đêm, J.W Marriott hiện là khách sạn có giá
        phòng Tổng thống cao nhất Hà Nội.


      </p>
    </div>

    <div class="container">
      <br />
      <h2 class="chu_1">Phòng Tổng Thống VIP4</h2>
      <img class="sticky" src="../asset/dlient/img/phong_tong_thong_4.jpg" alt="Avatar" width="300px">

      <p class="chu_2">
        Phòng Tổng Thống VIP4 có diện tích gần 200 m2/phòng và được cung cấp những tiện nghi đắt tiền, hiện đại. Căn phòng là sự pha
        trộn hài hòa giữa kiến trúc Phương Tây và văn hóa Phương Đông mang lại không gian thoáng và có cửa kính
        lớn giúp các thượng khách dễ dàng chiêm ngưỡng quan cảnh Hồ Tây lãng mạn.
        <br />
        Loại phòng này có cung cấp phòng khách, phòng ăn, phòng làm việc và một phòng nhỏ khác dành cho lực lượng
        cận vệ, thư ký. Bên phải của phòng khách là phòng ngủ được thông với phòng tắm bao gồm tất cả các thiết bị
        hiện đại và mới nhất hiện nay.
      </p>
    </div>


    <hr class="sep-2" />
    <h2 class="chu_01 text-center"> Giới Thiệu sơ lược về Khách sạn</h2>


    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <div class="card">
            <img src="../asset/dlient/img/gioi_thieu3.jpg" alt="Jane">
            <div class="container">
              <h2> Khách sạn The UNIVERSE</h2>
              <p>Với chất lượng chính hãng của máy pha cafe các khách hàng có thể an tâm
                thưởng thức, có giấy chứng nhận và có thể quét mã để quý khách an tâm khi
                thưởng thức dồ uống tại quán</p>

            </div>
          </div>
        </div>


        <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-3">
          <div class="card">
            <img src="../asset/dlient/img/gioi_thieu4.jpg" alt="Mike">
            <div class="container">
              <h2>Không gian bên trong của khách sạn </h2>

              <p>Mang Phong cách Hàn Quốc không gian nhẹ nhàng yên tĩnh cùng nhiều góc
                chụp sống ảo đẹp và bạn như chìm vào chuỗi ngày bình yên mà quên hết đi
                những mệt mỏi, bon chen thường nhật</p>

            </div>
          </div>
        </div>

        <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-3">
          <div class="card">
            <img src="../asset/dlient/img/nhan_vien_1.jpg" alt="John">

            <h2> Nguyên Liệu sạch</h2>
            <p>Nguyên liệu dùng để làm bánh và pha chế nước uống tại quán có nguồn góc
              rõ ràng không có chất bảo quản , đảm bảo an toàn vệ sinh thực phẩm</p>
          </div>
        </div>
      </div>
    </div>



    <?php
    require_once('../asset/dlient/page/footer.php')
    ?>


</body>

</html>