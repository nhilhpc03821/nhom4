<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng Kí </title>
    <script src="../asset/dlient/JS/index.js"></script>
    <link rel="shortcut icon" type="image/png" href="../asset/dlient/img/icon/avt.png" />
    <link href="../asset/dlient/CSS/index.css" rel="stylesheet">
    <link href="../asset/dlient/CSS/dangnhap.css" rel="stylesheet">
    <!-- <link href="../asset/dlient/CSS/sanpham.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>

<body>
    <!-- nav -->

    <?php
    require_once('../asset/dlient/page/header.php');
    ?>

    <div class="container">
        <div class="nd-form ">
            <header class="hd form text-center ">

                <img class="avt" src="../asset/dlient/img/icon/avt.png" alt="" width="300px" style="border: 1px solid black; border-radius: 50%; margin-bottom: 20px;">
            </header>

            <form method="POST" action="login-ac.php" class="needs-validation" novalidate="" autocomplete="off">
                <h1 class="fs-4 card-title fw-bold mb-4">Đăng Kí</h1>


                <div class="mb-3">
                    <label class="mb-2 text-muted" for="name">Tên Đăng Nhập</label>
                    <input id="email" type="email" class="form-control" name="ma_kh" value="" required autofocus>
                    <div class="invalid-feedback">
                        Không Được Để Trống
                    </div>
                </div>
                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label class="text-muted" for="password">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="mat_khau" required>
                    <div class="invalid-feedback">
                        Không Được Để Trống
                    </div>
                </div>

                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label class="text-muted" for="password">Nhập Lại Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="mat_khau" required>
                    <div class="invalid-feedback">
                        Không Được Để Trống
                    </div>
                </div>

                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label class="text-muted" for="email">Email</label>
                    </div>
                    <input id="password" type="email" class="form-control" name="email" required>
                    <div class="invalid-feedback">
                        Không Được Để Trống
                    </div>
                </div>
                <div class="d-flex align-items-center">

                    <button name="btn_login" type="submit" class="btn btn-primary ms-auto">
                        đăng kí
                    </button>
                </div>
                <hr>


                <div class="chuyen-huong">
                    <i>Bạn Đã Có Tài Khoản</i><a href="./DangNhap.php"> Đăng Nhập</a> ngay</i>
                </div>

            </form>
        </div>
    </div>
    <script src="../asset/dlient/JS/loginADMIN.js"></script>




    </div>


    <?php
    require_once('../asset/dlient/page/footer.php')
    ?>

</body>

</html>