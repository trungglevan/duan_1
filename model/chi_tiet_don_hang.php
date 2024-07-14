<?php
// Thêm
function insert_chi_tiet_don_hang($so_luong, $don_gia, $ma_sp, $ma_dh, $ten_sp, $hinh)
{
    $sql = "insert into chi_tiet_don_hang(so_luong, don_gia, ma_sp, ma_dh, ten_sp, hinh) values('$so_luong', $don_gia, '$ma_sp', '$ma_dh', '$ten_sp', '$hinh')";
    pdo_execute($sql);
}

// Load
function loadall_chi_tiet_don_hang()
{
    $sql = "select * from chi_tiet_don_hang order by ma_ctdh desc ";
    $listctdh = pdo_query($sql);
    return $listctdh;
}

// Xóa
function delete_chi_tiet_don_hang($ma_ctdh)
{
    $sql = "delete from chi_tiet_don_hang where ma_ctdh=" . $ma_ctdh;
    pdo_execute($sql);
}
?>