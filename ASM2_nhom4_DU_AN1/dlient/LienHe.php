<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Liên Hệ </title>

   <script src="../asset/dlient/JS/lienhe.js"></script>

   <link href="../asset/dlient/CSS/lienhe.css" rel="stylesheet">
</head>

<body>
   <?php
   require_once('../asset/dlient/page/header.php');
   ?>


   <body>

      <header class="logo text-center" style="margin-top: 100px;">
         <img class="avt" src="../asset/dlient/img/icon/avt.png" alt="" width="300px" style="border: 1px solid black; border-radius: 50%; margin-bottom: 20px;">

      </header>
      <section id="contact">

         <h1 class="section-header">Contact</h1>

         <div class="contact-wrapper">

            <!-- Left contact page -->

            <form id="contact-form" class="form-horizontal" role="form">

               <div class="form-group">
                  <div class="col-sm-12">
                     <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-sm-12">
                     <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                  </div>

               </div>
               <div class="form-group">

                  <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>

               </div>

               <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                  <div class="alt-send-button">
                     <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                  </div>

               </button>

            </form>

            <!-- Left contact page -->

            <div class="direct-contact-container">

               <ul class="contact-list">
                  <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">288, Nguyễn Văn Linh, An Khánh, Ninh Kiều, Cần Thơ</span></i></li>

                  <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">+84 857198354</a></span></i></li>

                  <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">hitmeup@gmail.com</a></span></i></li>

               </ul>

               <hr>
               <ul class="social-media-list">
                  <li><a href="" class="contact-icon">
                        <img width="100%" src="data:image/png;base64,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"></a> </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                        <img width="100%" src="data:image/png;base64,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"></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                        <img width="100%" src="data:image/png;base64,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"> </a>
                  </li>

               </ul>
               <hr>

               <div class="copyright">&copy; THE UNVERSE AHAHA</div>

            </div>

         </div>

      </section>

   </body>







</body>

</html>