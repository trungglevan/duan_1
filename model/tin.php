<?php
// Thêm mới
function insert_tin($ten_tin, $hinh, $mo_ta, $ngay_dang, $so_luot_xem, $ma_loaitin, $ma_tk)
{
    $sql = "insert into tin(ten_tin,hinh,mo_ta,ngay_dang,so_luot_xem,ma_loaitin, ma_tk) values('$ten_tin','$hinh','$mo_ta','$ngay_dang','$so_luot_xem','$ma_loaitin', '$ma_tk')";
    pdo_execute($sql);
}
// Xóa
function delete_tin($ma_tin)
{
    $sql = "delete from tin where ma_tin=" . $ma_tin;
    pdo_execute($sql);
}
// load 
function loadall_tin_nb()
{
    $sql = "select * from tin order by ma_tin asc limit 3";
    $list_tinnb = pdo_query($sql);
    return $list_tinnb;
}
function loadall_tin()
{
    $sql = "select * from tin order by ma_tin desc";
    $list_tin = pdo_query($sql);
    return $list_tin;
}
function loadone_tin($ma_tin)
{
    $sql = "select * from tin where ma_tin=" . $ma_tin;
    $lt = pdo_query_one($sql);
    return $lt;
}

// Sửa 
function update_tin($ma_tin, $ten_tin, $hinh, $mo_ta, $ngay_dang, $so_luot_xem, $ma_loaitin)
{
    if ($hinh != "") {
        $sql = "update tin set ten_tin='" . $ten_tin . "', hinh='" . $hinh . "', mo_ta='" . $mo_ta . "',ngay_dang='" . $ngay_dang . "',so_luot_xem='" . $so_luot_xem . "', ma_loaitin='" . $ma_loaitin . "' where ma_tin=" . $ma_tin;
    } else {
        $sql = "update tin set ten_tin='" . $ten_tin . "', mo_ta='" . $mo_ta . "', ngay_dang='" . $ngay_dang . "', so_luot_xem='" . $so_luot_xem . "', ma_loaitin='" . $ma_loaitin . "' where ma_tin=" . $ma_tin;
    }
    pdo_execute($sql);
}
// Tăng lượt xem
function tangluotxemtin($ma_tin)
{
    $onesp = loadone_tin($ma_tin);
    $luotxem = $onesp['so_luot_xem'] + 1;
    $sql = "update tin set so_luot_xem='" . $luotxem . "' where ma_tin =" . $ma_tin;
    pdo_execute($sql);
}

?>