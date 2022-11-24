<?php

if (isset($_POST['sua'])) {
    require '../connect.php';

    // lay thong tin tu form edit 
    $ma_loai = $_POST['ma_loai'];
    
    $gia = $_POST['don_gia'];
    $mota = $_POST['mota'];
    $ten_hh = $_POST['ten_hh'];
  

    if ($_FILES['hinhanh']['tmp_name'] == '') {
        $query = "UPDATE loai SET ten_loai='$ten_loai', mo_ta=$mo_ta, gia=$don_gia,ma_loai=$ma_loai WHERE ma_loai=$ma_loai   ";

        // thuc hien sua 
        if ($conn->query($query) === true) {
            header('location: SanPham.php');
        } else {
            echo ("LOI" . $conn->connect_error);
            // header('location: sanpham-ds.php');
        }
    } else {
        $file = $_FILES['hinhanh']['tmp_name'];

        // lay extension cua file 
        $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);

        // doi ten file thanh thoi gian hien tai 
        $image_name = date('YmdHis') . '.' . $image_ext;

        // cau hinh duong dan de di chuyen file 
        $path = "../asset/dlient/img/" . $image_name;


        if (move_uploaded_file($file, $path)) {
            // echo "Tải tập tin thành công";
            $query = "UPDATE loai SET ten_loai='$ten_loai',  ma_loai=$ma_loai WHERE ma_loai=$ma_loai";

            // thuc hien sua 
            if ($conn->query($query) === true) {
                header('location: SanPham.php');
            } else {
                echo ("LOI" . $conn->connect_error);
                // header('location: sanpham-ds.php');
            }
        } else {
            echo "Tải tập tin thất bại";
        }
    }
}
