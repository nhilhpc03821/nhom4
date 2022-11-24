<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>sản phẩm</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/admin/plugins/images/favicon.png">
    <link href="../asset/admin/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/admin/css/addcart.css">
    <link rel="stylesheet" href="../asset/dlient/CSS/TrangChu.CSS">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- Logo -->
                    <a class="navbar-brand" href="dashboard.php">
                        <b class="logo-icon">
                            <img src="../asset/admin/plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <span class="logo-text">
                            <img src="../asset/admin/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- Search -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Tìm kiếm..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="../asset/admin/plugins/images/users/hritik.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Lê Hồng Nhi</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../admin/dashboard.php" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Bảng điều khiển</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../admin/profile.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Hồ sơ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../admin/SanPham.php" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Danh sách sản phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../admin/map-google.php" aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Bản đồ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.php" aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" class="btn d-grid btn-danger text-white" target="_blank">
                                Upgrade to Pro</a>
                        </li>
                    </ul>

                    

                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Danh sách các sản phẩm</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Bảng điều khiển</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Danh sách sản phẩm</h3>
                            <p class="text-muted">Thêm danh sách <code>.Bảng</code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">STT</th>
                                            <th class="border-top-0">Mã sản phảm</th>
                                            <th class="border-top-0">Tên sản phẩm</th>
                                            <th class="border-top-0">Giá sản phẩm</th>
                                            <th class="border-top-0">Số lượng</th>
                                            <th class="border-top-0">Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                          
                                            <td>Trà Đào Latter</td>
                                            <td>750$</td>
                                            <td>20</td>
                                            <td><button><a href="sanpham-them.php">Thêm</a></button></td>
                                            <td><button><a href="sanpham-sua.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            
                                            <td>Sinh Tố Trái Cây Latter</td>
                                            <td>900$</td>
                                            <td>25</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            
                                            <td>Trà Dâu Dưa Hấu</td>
                                            <td>1050$</td>
                                            <td>18</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            
                                            <td>Cafe Latter Macha</td>
                                            <td>1000$</td>
                                            <td>15</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            
                                            <td>Iphone 12 Pro</td>
                                            <td>1025$</td>
                                            <td>10</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                           
                                            <td>Iphone 12 Pro Max</td>
                                            <td>1300$</td>
                                            <td>10</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                           
                                            <td>Trà Trái Cây</td>
                                            <td>1300$</td>
                                            <td>15</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            
                                            <td>Trà Bưởi Latter</td>
                                            <td>1525$</td>
                                            <td>10</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            
                                            <td>Dacquoises</td>
                                            <td>1800$</td>
                                            <td>10</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <!-- SamSung -->
                                        <tr>
                                            <td>10</td>
                                           
                                            <td>Charlotte</td>
                                            <td>1000$</td>
                                            <td>15</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                           
                                            <td>Baba au Rhum</td>
                                            <td>1025$</td>
                                            <td>10</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            
                                            <td> Macaron</td>
                                            <td>1300$</td>
                                            <td>10</td>
                                            <td><button><a href="addproducts.php">Thêm</a></button></td>
                                            <td><button><a href="fixproducts.php">Sửa</a></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            <!-- footer -->
            <footer class="footer text-center"> Bản quyền thuộc về Lê Hồng Nhi </footer>
            <!-- End footer -->
        </div>
    </div>
    <script src="../asset/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../asset/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/admin/js/app-style-switcher.js"></script>
    <script src="../asset/admin/js/waves.js"></script>
    <script src="../asset/admin/js/sidebarmenu.js"></script>
    <script src="../asset/admin/js/custom.js"></script>
</body>

</html>