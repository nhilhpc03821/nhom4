<?php
function tao_don_hang($ten_khach_hang,
$email,
$so_dien_thoai,
$ngay_dat_phong,
$so_nguoi,
$so_luong_phong,
$ma_hh,
$gia){
    $sql = " INSERT into don_hang(ten_khach_hang,
                                    email,
                                    so_dien_thoai,
                                    ngay_dat_phong,
                                    so_nguoi,
                                    so_luong_phong,
                                    ma_hh,
                                    gia) 
                                    values ('$ten_khach_hang',
                                    '$email',
                                    '$so_dien_thoai',
                                    '$ngay_dat_phong',
                                    '$so_nguoi',
                                    '$so_luong_phong',
                                    '$ma_hh',
                                    '$gia')";
    
    if(pdo_execute($sql)){
        return true;
    }else{
        return false;
    }
}

