<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "du_an_mau"; // dat ten gi thi lam on de vao gium

try {
    $conn = new PDO("mysql:host=$servername;dbname=du_an_mau", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
  } catch(PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
  }

  // update
$ma_loai=1;
$ten_loai=" Cafe sữa nóng";
  $sql = " UPDATE loai SET ten_loai=? WHERE ma_loai=?";
  try {
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($ten_loai, $ma_loai));
    echo " Cập nhật thành công!";
  }
  catch(PDOException $e){
    echo " lỗi cập nhật!";
  }
  finally{
    unset($conn);
  }







  ?>
