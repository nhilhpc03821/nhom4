<?php
session_start();
include "../dao/pdo.php";
include "header.php";
include "../dao/loai.php";
include "../dao/hang-hoa.php";
include "../dao/khach-hang.php";
include "../dao/don-hang.php";
include "../dao/lien-he.php";
//controller
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
            // loại
        case 'addloai':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_loai($tenloai);
                echo  "thêm thành công";
            }
            include "loai/new.php";
            break;

        case 'listloai':
            $listloai = load_list();
            include "loai/list.php";
            break;

        case 'xoaloai':
            if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                delete_loai($_GET['maloai']);
            }
            $listloai = load_list();
            include "loai/list.php";
            break;

        case 'sualoai':
            if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                $dm = load_one($_GET['maloai']);
            }
            include "loai/edit.php";
            break;


        case 'updateloai':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $maloai = $_POST['maloai'];
                update_loai($maloai, $tenloai);
            }
            $listloai = load_list();
            include 'loai/list.php';
            break;


            // sản phẩm
        case 'addhh':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $maloai = $_POST['maloai'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['giahh'];
                $mota = $_POST['motahh'];
                $hinh = $_FILES['hinhhh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhhh"]["name"]);

                if (move_uploaded_file($_FILES["hinhhh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }



                insert_hang_hoa($tenhh, $dongia, $hinh, $mota, $maloai);
                // $thongbao =
                echo "thêm thành công";
            }
            $listloai = load_list();
            include "hang-hoa/new.php";
            break;


        case 'listhh':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kw = $_POST['kw'];
                $maloai = $_POST['maloai'];
            } else {
                $kw = "";
                $maloai = 0;
            }
            $listloai = load_list();
            $listhh = load_listhh($kw, $maloai);
            include "hang-hoa/list.php";
            break;

        case 'xoahh':
            if (isset($_GET['mahh']) && ($_GET['mahh'] > 0)) {
                delete_hang_hoa($_GET['mahh']);
            }
            $listhh = load_listhh("", 0);
            include "hang-hoa/list.php";
            break;

        case 'suahh':
            if (isset($_GET['mahh']) && ($_GET['mahh'] > 0)) {
                $hh = load_onehh($_GET['mahh']);
            }
            $listloai = load_list();
            include "hang-hoa/edit.php";
            break;

        case 'updatehh':
            if (isset($_POST['capnhathh']) && ($_POST['capnhathh'])) {
                $maloai = $_POST['maloai'];
                $mahh = $_POST['mahh'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['giahh'];
                $mota = $_POST['motahh'];
                $hinh = $_FILES['hinhhh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhhh"]["name"]);

                if (move_uploaded_file($_FILES["hinhhh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_hang_hoa($mahh, $tenhh, $dongia, $hinh, $mota, $maloai);
            }
            $listhh = load_listhh("", 0);
            include 'hang-hoa/list.php';
            break;

            // đơn hàng
        case 'listdh':
            $don_hang = danh_sach_don_hang();
            include "don-hang/list.php";
            break;

            //liên hệ
        case 'listlh':
            $lien_he = danh_sach_lien_he();
            include "lien-he/list.php";
            break;


            //khách hàng 
        case 'listkh':
            $listkh = listkh();
            $_SESSION['kh'] = $listkh;
            include "khach-hang/list.php";


            break;

        case 'suakh':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                $kh = select_kh($_GET['makh']);
            }
            $listkh = listkh();
            include "khach-hang/edit.php";
            break;


        case 'updatekh':
            if (isset($_POST['capnhatkh']) && ($_POST['capnhatkh'])) {
                $makh = $_POST['makh'];
                $tenkh = $_POST['tenkh'];
                $email = $_POST['email'];
                $vaitro = $_POST['vaitro'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_kh_admin($makh, $tenkh, $email, $vaitro, $hinh);
            }
            $listkh = listkh();
            $_SESSION['kh'] = $listkh;
            include 'khach-hang/list.php';
            break;


        case 'xoakh':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                delete_khach_hang($_GET['makh']);
            }
            $listkh = listkh();
            $_SESSION['kh'] = $listkh;
            include "khach-hang/list.php";
            break;


        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
