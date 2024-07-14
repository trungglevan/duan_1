<?php
// Thêm mới
function insert_loai_sp($ten_loaisp)
{
    $sql = "insert into loai_sp(ten_loaisp) values('$ten_loaisp')";
    pdo_execute($sql);
}
// Xóa
function delete_loai_sp($ma_loaisp)
{
    $sql = "delete from loai_sp where ma_loaisp=" . $ma_loaisp;
    pdo_execute($sql);
}
// load 
function loadall_loai_sp()
{
    $sql = "select * from loai_sp order by ma_loaisp desc";
    $list_loai = pdo_query($sql);
    return $list_loai;
}
function loadone_loai_sp($ma_loaisp)
{
    $sql = "select * from loai_sp where ma_loaisp=" . $ma_loaisp;
    $lt = pdo_query_one($sql);
    return $lt;
}
// update 
function update_loai_sp($ma_loaisp, $ten_loaisp)
{
    $sql = "update loai_sp set ten_loaisp='" . $ten_loaisp . "' where ma_loaisp=" . $ma_loaisp;
    pdo_execute($sql);
}
// Thống kê
function loadall_thongke()
{
    $sql = "select loai_sp.ten_loaisp as ten_loai_sp,loai_sp.ma_loaisp as ma_loai_sp,count(san_pham.ma_sp) as countsp, min(san_pham.don_gia) as mingia,max(san_pham.don_gia) as maxgia, avg(san_pham.don_gia) as giatb ";

    $sql .= "  from san_pham join loai_sp on san_pham.ma_loaisp=loai_sp.ma_loaisp";
    $sql .= " group by loai_sp.ma_loaisp order by loai_sp.ma_loaisp desc ";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>