<?php
function insert_loai($tenloai)
{
    $sql = "INSERT into loai(ten_loai) values ('$tenloai')";
    pdo_execute($sql);
}

function delete_loai($id)
{
    $sql = "DELETE from loai where ma_loai =" . $id;
    pdo_execute($sql);
}

function load_list()
{
    $sql = "SELECT * from loai ORDER BY ma_loai desc";
    $listloai = pdo_query($sql);
    return $listloai;
}

function load_one($id)
{
    $sql = "SELECT * from loai where ma_loai=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}


function update_loai($maloai, $tenloai)
{
    $sql = "UPDATE loai set ten_loai = '$tenloai' where ma_loai = '$maloai'";
    pdo_execute($sql);
}
