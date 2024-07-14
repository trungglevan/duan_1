<?php
// Thêm
function insert_binhluan($noi_dung, $ngay_bl, $ma_sp, $ma_tk)
{
    $sql = "insert into binh_luan(noi_dung,ngay_bl,ma_sp,ma_tk) values('$noi_dung','$ngay_bl','$ma_sp','$ma_tk')";
    pdo_execute($sql);
}
// Load
function loadall_binh_luan($ma_sp)
{
    $sql = "select * from binh_luan where 1";
    if ($ma_sp > 0)
        $sql .= " AND ma_sp='" . $ma_sp . "'";
    $sql .= " order by ma_bl desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

// Xóa
function delete_binh_luan($ma_bl)
{
    $sql = "delete from binh_luan where ma_bl=" . $ma_bl;
    pdo_execute($sql);
}
?>