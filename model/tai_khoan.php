<?php
// Thêm mới
function insert_tai_khoan($ma_tk, $ho_ten, $mat_khau, $email, $hinh, $vai_tro, $kich_hoat)
{
    $sql = "insert into tai_khoan(ma_tk, ho_ten, mat_khau, email, hinh, vai_tro, kich_hoat) values('$ma_tk', '$ho_ten', '$mat_khau', '$email', '$hinh', '$vai_tro', $kich_hoat=1)";
    pdo_execute($sql);
}
function insert_tai_khoan_user($ma_tk, $ho_ten, $mat_khau, $email, $hinh)
{
    $sql = "insert into tai_khoan(ma_tk, ho_ten, mat_khau, email, hinh) values('$ma_tk', '$ho_ten', '$mat_khau', '$email', '$hinh')";
    pdo_execute($sql);
}
// Xóa
function delete_tai_khoan($ma_tk)
{
    $sql = "delete from tai_khoan where ma_tk='" . $ma_tk . "'";
    pdo_execute($sql);
}
// load 
function loadall_tai_khoan()
{
    $sql = "select * from tai_khoan order by ma_tk desc";
    $list_tk = pdo_query($sql);
    return $list_tk;
}
function loadone_tai_khoan($ma_tk)
{
    $sql = "select * from tai_khoan where ma_tk='" . $ma_tk . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}
// update 
function update_tai_khoan($ma_tk, $ho_ten, $mat_khau, $email, $hinh, $vai_tro, $kich_hoat)
{
    if ($hinh != "")
        $sql = "update tai_khoan set ho_ten='" . $ho_ten . "', mat_khau='" . $mat_khau . "', email='" . $email . "',hinh='" . $hinh . "',vai_tro='" . $vai_tro . "' where ma_tk='" . $ma_tk . "'";
    else
        $sql = "update tai_khoan set ho_ten='" . $ho_ten . "', mat_khau='" . $mat_khau . "', email='" . $email . "',vai_tro='" . $vai_tro . "' where ma_tk='" . $ma_tk . "'";
    pdo_execute($sql);
}

function update_tai_khoan_user($ma_tk, $ho_ten, $mat_khau, $hinh)
{
    if ($hinh != "")
        $sql = "update tai_khoan set ho_ten='" . $ho_ten . "', mat_khau='" . $mat_khau . "',hinh='" . $hinh . "' where ma_tk='" . $ma_tk . "'";
    else
        $sql = "update tai_khoan set ho_ten='" . $ho_ten . "', mat_khau='" . $mat_khau . "' where ma_tk='" . $ma_tk . "'";
    pdo_execute($sql);
}
// check
function checkuser($ma_tk, $mat_khau)
{
    $sql = "select * from tai_khoan where ma_tk='" . $ma_tk . "' AND mat_khau='" . $mat_khau . "' AND kich_hoat=1";
    $tk = pdo_query_one($sql);
    return $tk;
}

function checkemail($email)
{
    $sql = "select * from tai_khoan where email='" . $email . "' ";
    $tk = pdo_query_one($sql);
    return $tk;
}
?>