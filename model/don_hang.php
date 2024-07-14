<?php
function insert_don_hang($trang_thai, $so_luong, $don_gia, $ngay_mua, $ma_tk)
{
    $mysqli = mysqli_connect("localhost", "trungglevan", "220204Trungg@", "duan_1");
    $sql = "insert into don_hang(trang_thai, so_luong, don_gia, ngay_mua, ma_tk) values($trang_thai, '$so_luong', '$don_gia', '$ngay_mua', '$ma_tk')";
    $result = mysqli_query($mysqli, $sql);
    $lastInsertedId = $mysqli->insert_id;
    return $lastInsertedId;
}

// Load
function loadall_don_hang()
{
    $sql = "select * from don_hang order by ma_dh desc";
    $listdh = pdo_query($sql);
    return $listdh;
}

// Xóa
function delete_don_hang($ma_dh)
{
    $sql = "delete from don_hang where ma_dh=" . $ma_dh;
    pdo_execute($sql);
}
?>