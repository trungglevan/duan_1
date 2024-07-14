<?php
// Thêm mới
function insert_san_pham($ten_sp, $don_gia, $hinh, $mo_ta, $ngay_nhap, $so_luot_xem, $ma_loaisp, $ma_tk)
{
    $sql = "insert into san_pham(ten_sp, don_gia,hinh, mo_ta, ngay_nhap, so_luot_xem, ma_loaisp, ma_tk) 
    values('$ten_sp', '$don_gia', '$hinh', '$mo_ta', '$ngay_nhap', '$so_luot_xem', '$ma_loaisp', '$ma_tk')";
    pdo_execute($sql);
}
// Xóa
function delete_san_pham($ma_sp)
{
    $sql = "delete from san_pham where ma_sp=" . $ma_sp;
    pdo_execute($sql);
}
// load 
function loadall_san_pham()
{
    $sql = "select * from san_pham order by ma_sp desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_san_pham($ma_sp)
{
    $sql = "select * from san_pham where ma_sp=" . $ma_sp;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_san_pham_top10()
{
    $sql = "select * from san_pham where 1 order by so_luot_xem desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_ten_loaisp($ma_loaisp)
{
    if ($ma_loaisp > 0) {
        $sql = "select * from loai_sp where ma_loaisp=" . $ma_loaisp;
        $loai_sp = pdo_query_one($sql);
        extract($loai_sp);
        return $ten_loaisp;
    } else {
        return "";
    }
}
// Sửa
function update_san_pham($ma_sp, $ten_sp, $don_gia, $hinh, $mo_ta, $ngay_nhap, $so_luot_xem, $ma_loaisp, $ma_tk)
{
    if ($hinh != "")
        $sql = "update san_pham set ten_sp='" . $ten_sp . "', don_gia='" . $don_gia . "', hinh='" . $hinh . "',mo_ta='" . $mo_ta . "'
    ,ngay_nhap='" . $ngay_nhap . "',so_luot_xem='" . $so_luot_xem . "',ma_loaisp=$ma_loaisp,ma_tk='" . $ma_tk . "' where ma_sp=" . $ma_sp;
    else
        $sql = "update san_pham set ten_sp='" . $ten_sp . "', don_gia='" . $don_gia . "', mo_ta='" . $mo_ta . "',ngay_nhap='" . $ngay_nhap . "'
    ,so_luot_xem='" . $so_luot_xem . "',ma_loaisp=$ma_loaisp,ma_tk='" . $ma_tk . "' where ma_sp=" . $ma_sp;
    pdo_execute($sql);
}
// Tăng lượt xem
function tang_luot_xem($ma_sp)
{
    $onesp = loadone_san_pham($ma_sp);
    $luotxem = $onesp['so_luot_xem'] + 1;
    $sql = "update san_pham set so_luot_xem='" . $luotxem . "' where ma_sp =" . $ma_sp;
    pdo_execute($sql);
}

//Tìm kiếm
function searcha($kyw = "", $ma_loaisp = 0)
{
    $sql = "select * from san_pham where 1";
    if ($kyw != "") {
        $sql .= " and ten_sp like '%" . $kyw . "%'";
    }
    if ($ma_loaisp > 0) {
        $sql .= " and ma_loaisp ='" . $ma_loaisp . "'";
    }
    $sql .= " order by ma_sp desc";
    $listsan_pham = pdo_query($sql);
    return $listsan_pham;
}


?>