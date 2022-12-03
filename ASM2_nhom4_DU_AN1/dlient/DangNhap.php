<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Đăng Nhập </title>
   <script src="../asset/dlient/JS/index.js"></script>

   <link href="../asset/dlient/CSS/index.css" rel="stylesheet">

   <link href="../asset/dlient/CSS/sanpham.css" rel="stylesheet">

   <link href="../asset/dlient/CSS/dangnhap.css" rel="stylesheet">

</head>

<body>

   <div class="index">
      <ul class="nav-01">
         <li><a href="index.php">Trang chủ</a></li>

         <li><a href="About.php"> About </a></li>

         <li><a href="Phong.php">Phòng</a></li>

         <li><a href="DichVu.php"> Dịch Vụ </a></li>

         <li><a href="LienHe.php">Liên Hệ</a></li>

         <li><a href="DangNhap.php">Đăng Nhập</a></li>

         <li><a href="DangKy.php">Đăng Ký</a></li>
      </ul>
   </div>

   <br />

   <div class="overlay">
      <!-- LOGN IN FORM by Omar Dsoky -->
      <form>
         <!--   con = Container  for items in the form-->
         <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
               <h2>Log In</h2>
               <!--     A welcome message or an explanation of the login form -->
               <p>login here using your username and password</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">

               <!--   user name -->
               <span class="input-item">
                  <i class="fa fa-user-circle"></i>
               </span>
               <!--   user name Input-->
               <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required>

               <br>

               <!--   Password -->

               <span class="input-item">
                  <i class="fa fa-key"></i>
               </span>
               <!--   Password Input-->
               <input class="form-input" type="password" placeholder="Password" id="pwd" name="password" required>

               <!--      Show/hide password  -->
               <span>
                  <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
               </span>


               <br>
               <!--        buttons -->
               <!--      button LogIn -->
               <button class="log-in"> Log In </button>
            </div>

            <!--   other buttons -->
            <div class="other">
               <!--      Forgot Password button-->
               <button class="btn submits frgt-pass">Forgot Password</button>
               <!--     Sign Up button -->
               <button class="btn submits sign-up">Sign Up
                  <!--         Sign Up font icon -->
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
               </button>
               <!--      End Other the Division -->
            </div>

            <!--   End Conrainer  -->
         </div>

         <!-- End Form -->
      </form>
   </div>

   <script src="../asset/dlient/JS/loginADMỊN.js"></script>
   <br /><br /><br /><br /><br /><br /><br /><br />
   <br /><br /><br /><br /><br /><br /><br /><br />


   </div>
</body>

</html>