<?php
session_start();
include "../dao/pdo.php";
include "../dao/lien-he.php";

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['noi_dung'])
) {
    lien_he_moi(
        $_POST['name'],
        $_POST['email'],
        $_POST['noi_dung']
    );
} ?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ </title>
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
    <div>

        <div class="banner text-center" style="margin-top: 78px;">

            <img src="../asset/dlient/img/icon/avt.png">

            <h2> CẢM ƠN BẠN ĐÃ LIÊN HỆ</h1>
                <h5>Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất</h5>
        </div>


        <tbody>
            <tr>
                <th><strong>Tên của bạn: </strong></th>
                <td><?= $_POST['name'] ?></td>
            </tr>
            <tr>
                <th scope="row"><strong>Email:</strong></th>
                <td><?= $_POST['email'] ?></td>
            </tr>
            <tr>
                <th scope="row"><strong>Nội dung</strong></th>
                <td><?= $_POST['noi_dung'] ?></td>
            </tr>

        </tbody>


        <div class="container text-center" style=" margin-top: 50px;">
            <a href="index.php" class="btn btn-primary">QUAY LẠI TRANG CHỦ</a>
            <a href="Phong.php" class="btn btn-primary">TIẾP TỤC XEM PHÒNG</a>
        </div>

    </div>


    </div>
</body>

</html>

<style>
    .btn-primary {
        background-color: #343a40;
    }
</style>