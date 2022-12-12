<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký tài khoản mới</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/dlient/JS/index.js"></script>

    <link href="../../asset/dlient/CSS/index.css" rel="stylesheet">

    <link href="../asset/dlient/CSS/sanpham.css" rel="stylesheet">

    <link href="../../asset/dlient/CSS/dangky.css" rel="stylesheet">

</head>

<body>

    <?php
    require_once('../../asset/dlient/page/header.php');
    ?>



    <div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
                <div class="company-details ">

                    <div class="shadow"></div>
                    <div class="wrapper-1">
                        <div class="logo">
                            <div class="icon-food">

                            </div>
                        </div>
                        <h1 class="title">cupcake co.</h1>
                        <div class="slogan">We deliver cupcakes to you.</div>
                    </div>

                </div>
                <div class="signup-form ">
                    <div class="wrapper-2">
                        <div class="form-title"> Đăng Ký Ngay Thành Hội Viên</div>
                        <div class="form">
                            <form>
                                <p class="content-item">
                                    <label>full name
                                        <input type="text" placeholder="Lorem ipsum" required>
                                    </label>
                                </p>

                                <p class="content-item">
                                    <label>email address
                                        <input type="text" placeholder="lorem@loremipsum.com" name="email" required>
                                    </label>
                                </p>

                                <p class="content-item">

                                    <label>password
                                        <input type="password" placeholder="*****" name="psw" required>
                                    </label>
                                </p>


                                <button type="submit" class="signup"> Đăng Ký </button>
                                <a href="#" class="login">login</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



</body>

</html>