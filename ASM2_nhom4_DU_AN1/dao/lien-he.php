<?php

function lien_he_moi(
    $ten_khach_hang,
    $email,
    $noi_dung
) {

    $sql = "INSERT into lien_he(ten_khach_hang,email,noi_dung )
    values ('$ten_khach_hang','$email', '$noi_dung')";

    if (pdo_execute($sql)) {
        return true;
    } else {
        return false;
    }
}

function danh_sach_lien_he()
{
    $sql = "SELECT * from lien_he WHERE 1 ";
    $sql .= " ORDER BY id";
    $lien_he = pdo_query($sql);
    return $lien_he;
}


function delete_lien_he($id)
{
    $sql = "DELETE from hang_hoa where ma_hh =" . $id;
    pdo_execute($sql);
}
