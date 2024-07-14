<?php
// Thêm mới
function insert_loai_tin($ten_loaitin)
{
    $sql = "insert into loai_tin(ten_loaitin) values('$ten_loaitin')";
    pdo_execute($sql);
}
// Xóa
function delete_loai_tin($ma_loaitin)
{
    $sql = "delete from loai_tin where ma_loaitin=" . $ma_loaitin;
    pdo_execute($sql);
}
// load 
function loadall_loai_tin()
{
    $sql = "select * from loai_tin order by ma_loaitin desc";
    $list_loai = pdo_query($sql);
    return $list_loai;
}
function loadone_loai_tin($ma_loaitin)
{
    $sql = "select * from loai_tin where ma_loaitin=" . $ma_loaitin;
    $lt = pdo_query_one($sql);
    return $lt;
}
// update 
function update_loai_tin($ma_loaitin, $ten_loaitin)
{
    $sql = "update loai_tin set ten_loaitin='" . $ten_loaitin . "' where ma_loaitin=" . $ma_loaitin;
    pdo_execute($sql);
}
?>