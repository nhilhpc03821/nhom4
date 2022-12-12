<?php
function insert_hang_hoa($tenhh, $dongia, $hinh, $mota, $maloai)
{
    $sql = " INSERT into hang_hoa(ten_hh,don_gia,hinh,mo_ta,ma_Loai) values ('$tenhh','$dongia','$hinh','$mota','$maloai')";
    pdo_execute($sql);
}

//THÊM HÀNG HÓA
function delete_hang_hoa($id)
{
    $sql = "DELETE from hang_hoa where ma_hh =" . $id;
    pdo_execute($sql);
}

function load_listhh($kw, $maloai)
{
    $sql = "SELECT * from hang_hoa WHERE 1 ";
    if ($kw != "") {
        $sql .= " AND ten_hh like '%" . $kw . "%'";
    }
    if ($maloai > 0) {
        $sql .= " AND ma_loai = '" . $maloai . "'";
    }
    $sql .= " ORDER BY ma_hh";
    $listhh = pdo_query($sql);
    return $listhh;

    $sql = "SELECT * from hang_hoa ORDER BY ma_loai desc";
    $listhh = pdo_query($sql);
    return $listhh;
}



function load_listhh_top10()
{
    $sql = "SELECT * from hang_hoa where 1 order by ma_hh desc limit 0,9";
    $listhh = pdo_query($sql);
    return $listhh;
}


function load_listhh_trangchu()
{
    $sql = "SELECT * from hang_hoa where 1 order by ma_hh limit 0,9";
    $listhh = pdo_query($sql);
    return $listhh;
}



function load_loaihh($id)
{
    if ($id > 0) {
        $sql = "SELECT * from loai where ma_loai=" . $id;
        $hh = pdo_query_one($sql);
        extract($hh);
        return $ten_loai;
    } else {
        return "";
    }
}

function load_onehh($id)
{
    $sql = "SELECT * from hang_hoa where ma_hh=" . $id;
    $hh = pdo_query_one($sql);
    return $hh;
}

function load_hh_cungloai($mahh, $maloai)
{
    $sql = "SELECT * from hang_hoa where ma_Loai =" . $maloai . " and ma_hh <>" . $mahh;
    $listhh = pdo_query($sql);
    return $listhh;
}


function update_hang_hoa($mahh, $tenhh, $dongia, $hinh, $mota, $maloai)
{
    if (empty(!$hinh)) {
        $sql = "UPDATE  'hang_hoa' set ten_hh='$tenhh', don_gia='$dongia', hinh='$hinh', mo_ta='$mota' , ma_Loai = '$maloai' where ma_hh = '$mahh'";
    } else {
        $sql = "UPDATE hang_hoa set ten_hh='$tenhh', don_gia='$dongia', mo_ta='$mota' , ma_Loai = '$maloai' where ma_hh = '$mahh'";
    }
    pdo_execute($sql);
}
