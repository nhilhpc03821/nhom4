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
} catch (PDOException $e) {
  echo "Lỗi kết nối: " . $e->getMessage();
}
