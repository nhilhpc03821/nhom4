<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Đăng Nhập </title>
   <script src="../asset/dlient/JS/index.js"></script>

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
            <h3>Đăng Nhập</h3>
         </header>

         <form method="POST" action="login-ac.php" class="needs-validation" novalidate="" autocomplete="off">



            <div class="mb-3">
               <label class="mb-2 text-muted" for="email">Username</label>
               <input id="email" type="email" class="form-control" name="ma_kh" value="" required autofocus>
               <div class="invalid-feedback">
                  Email is invalid
               </div>
            </div>
            <div class="mb-3">
               <div class="mb-2 w-100">
                  <label class="text-muted" for="password">Password</label>
               </div>
               <input id="password" type="password" class="form-control" name="mat_khau" required>
               <div class="invalid-feedback">
                  Password is required
               </div>
            </div>

            <div class="d-flex align-items-center">
               <div class="form-check">
                  <input type="checkbox" name="remember" id="remember" class="form-check-input">
                  <label for="remember" class="form-check-label">Remember Me</label>
               </div>
               <button name="btn_login" type="submit" class="btn btn-primary ms-auto">
                  Login
               </button>
            </div>
            <hr>
            <div class="mb-3 text-center">
               <i>or</i>
               <div class="item-login">

                  <a href="#"> <img src="data:image/png;base64,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"></a>
                  <a href="#"> <img src="data:image/png;base64,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"></a>
               </div>
            </div>

            <div class="chuyen-huong">
               <i>Bạn Chưa Có Tài Khoản</i><a href="./DangKy.php"> Đăng Kí</a> ngay</i>
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