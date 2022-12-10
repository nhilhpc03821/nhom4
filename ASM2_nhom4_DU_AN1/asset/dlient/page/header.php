<script type="text/javascript">
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
    });
</script>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #343a40;">

    <a class="navbar-brand ml-5 font-weight-bold" href="index.php" style="font-size: 35px;;">THE UNIVERSE</a>

    <!-- Collapse Button -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expand="false" aria-label="Toggle navigation" data-target="#exnavbar" aria-control="exnavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!--  Collapsible Content -->

    <div class="collapse navbar-collapse pr-5" id="exnavbar">

        <!-- Links -->

        <ul class="navbar-nav ml-auto mr-5 pr-5" style="font-size: 19px; ">

            <li class="nav-item">
                <a class="nav-link" href="index.php"> Trang Chủ </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="About.php">Giới Thiệu</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Phong.php"> Phòng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="LienHe.php"> Liên Hệ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">Tài Khoản</a>
                <div class="dropdown-menu dropdown-primary" aria-label="navbardropdownlink">
                    <a class="dropdown-item" href="DangNhap.php">Đăng Nhập</a>
                    <a class="dropdown-item" href="DangKy.php">Đăng Kí</a>

                </div>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="GioHang.php"> Đơn Hàng</a>
            </li>
        </ul>

    </div>

</nav>

<div style="margin-top: 10%;text-align: center;color: #000">
    <h1 class="font-weight-bold" style="font-size: 50px;">WELLCOME</h1>
    <h4>Free Source of Prodigious Codding for EveryOne</h4>
</div>




<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<!-- 
<style>
    body {
        background-image: url('../img/img1.jpg');
        background-size: cover;
        height: 120vh;
    }

    .nav-link {
        font-size: 20px;
        margin-left: 20px;
        font-weight: bold;
    }

    .dropdown-menu {
        animation-name: atthover;
        animation-duration: 1s;
        animation-iteration-count: finite;
    }

    .dropdown:hover {
        animation-play-state: running;
    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-item:hover {
        background-color: #ccc;
    }

    @keyframes atthover {
        0% {
            opacity: 0;
            margin-top: 30px;
        }

        50% {
            opacity: 1;
            margin-top: 0px;
        }

        100% {
            opacity: 100%;
        }

    }

    .navbar-dark.scrolled {
        background: #4a4847;
        transition: .5s ease-in-out;
    }
</style> -->