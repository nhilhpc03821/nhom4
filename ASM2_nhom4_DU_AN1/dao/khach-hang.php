
<?php
function listkh()
{
    $sql = "SELECT * from khach_hang";
    $kh = pdo_query($sql);
    return $kh;
}
function delete_khach_hang($id)
{
    $sql = "DELETE from khach_hang where ma_kh ='$id'";
    pdo_execute($sql);
}
function insert_khach_hang($email, $ten, $pass)
{
    $sql = "INSERT into khach_hang(email,ho_ten,mat_khau) values ('$email','$ten','$pass')";
    pdo_execute($sql);
}
function SELECT_kh($makh)
{
    $sql = "SELECT * from khach_hang where ma_kh='$makh'";
    $kh = pdo_query_one($sql);
    return $kh;
}
function check_kh($ten, $pass)
{
    $sql = "SELECT * from khach_hang where ho_ten='$ten' and mat_khau = '$pass'";
    $kh = pdo_query_one($sql);
    return $kh;
}
function check_email($email)
{
    $sql = "SELECT * from khach_hang where email='$email'";
    $kh = pdo_query_one($sql);
    return $kh;
}
function UPDATE_kh($makh, $email, $ten, $pass)
{
    $sql = "UPDATE khach_hang set email = '$email', ho_ten = '$ten' where mat_khau ='$pass' and ma_kh ='$makh'";
    pdo_execute($sql);
}

function UPDATE_kh_admin($makh, $tenkh, $email, $vaitro, $hinh)
{
    $sql = "UPDATE khach_hang set email = '$email', ho_ten = '$tenkh', vai_tro ='$vaitro', hinh='$hinh' where ma_kh='$makh'";
    pdo_execute($sql);
}

function UPDATE_mk($makh, $passnew)
{
    $sql = "UPDATE khach_hang set mat_khau ='$passnew' where ma_kh ='$makh'";
    pdo_execute($sql);
}


function UPDATE_vaitro($makh, $vaitro)
{
    $sql = "UPDATE khach_hang set vai_tro ='$vaitro' where ma_kh ='$makh'";
    pdo_execute($sql);
}
?>