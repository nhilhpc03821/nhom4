<?php

if (isset($_POST['them'])) {
    require '../connect.php';

    $file = $_FILES['hinhanh']['tmp_name'];

    // lay extension cua file 
    $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);

    // doi ten file thanh thoi gian hien tai 
    $image_name = date('YmdHis') . '.' . $image_ext;

    // cau hinh duong dan de di chuyen file 
    $path = "../asset/dlient/img/" . $image_name;

    $ten_hh = $_POST['ten_hh'];
    $gia = $_POST['don_gia'];
    $mota = $_POST['mo_ta'];
    $ma_hh = $_POST['ma_hh'];
   

    // var_dump($_POST);

    if (move_uploaded_file($file, $path)) {
        // echo "Tải tập tin thành công";
        $query = "INSERT INTO loai () VALUES ('$ten_hh', '$ma_hh', )";

        // thuc hien them 
        if ($conn->query($query) === true) {
            header('location: SanPham.php');
        } else {
            echo ("LOI" . $conn->connect_error);
            // header('location: loaisanpham-ds.php');
        }
    } else {
        echo "Tải tập tin thất bại";
    }
} else {
    header('location: index.php');
}
 
?>

