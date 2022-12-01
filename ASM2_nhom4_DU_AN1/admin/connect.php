<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "du_an_mau";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=khach_san1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch (PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
}
