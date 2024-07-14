<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    ob_start();
    session_start();
    include "./layout/header.php";
    include "../model/pdo.php";
    include "../model/loai_tin.php";
    include "../model/loai_sp.php";
    include "../model/tai_khoan.php";
    include "../model/tin.php";
    include "../model/san_pham.php";
    include "../model/binh_luan.php";
    include "../model/don_hang.php";
    include "../model/chi_tiet_don_hang.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'loaitin':
                if (isset($_POST['them'])) {
                    $ten_loaitin = $_POST['ten_loaitin'];
                    insert_loai_tin($ten_loaitin);
                    echo '<script language="javascript">alert("Thêm thành công loại tin ' . $ten_loaitin . '!"); window.location="index.php?act=loaitin";</script>';
                }
                if (isset($_GET['ma_loaitin'])) {
                    delete_loai_tin($_GET['ma_loaitin']);
                }
                $listloaitin = loadall_loai_tin();
                include "./loai_tin/loai_tin.php";
                break;
            case 'edit_loaitin':
                if (isset($_POST['luu'])) {
                    $ma_loaitin = $_POST['ma_loaitin'];
                    $ten_loaitin = $_POST['ten_loaitin'];
                    update_loai_tin($ma_loaitin, $ten_loaitin);
                    echo '<script language="javascript">alert("Sửa thành công mã loại tin ' . $ma_loaitin . ' !"); window.location="index.php?act=loaitin";</script>';
                }
                include "./loai_tin/edit.php";
                break;
            case 'tin':
                if (isset($_POST['them'])) {
                    $ma_tin = $_POST['ma_tin'];
                    $ten_tin = $_POST['ten_tin'];
                    $ngay_dang = date('Y-m-d');
                    $mo_ta = $_POST['mo_ta'];
                    $hinh = $_FILES['hinh']['name'];
                    $so_luot_xem = $_POST['so_luot_xem'];
                    $ma_loaitin = $_POST['ma_loaitin'];
                    $ma_tk = $_SESSION['user']['ma_tk'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                    } else {
                        echo "Không thế upload file";
                    }
                    insert_tin($ten_tin, $hinh, $mo_ta, $ngay_dang, $so_luot_xem, $ma_loaitin, $ma_tk);
                    echo '<script language="javascript">alert("Thêm thành công tin ' . $ten_tin . '!"); window.location="index.php?act=tin";</script>';
                }
                if (isset($_GET['ma_tin'])) {
                    delete_tin($_GET['ma_tin']);
                }
                $listtin = loadall_tin();
                $listloaitin = loadall_loai_tin();
                include "./tin/tin.php";
                break;
            case 'edit_tin':
                if (isset($_GET['ma_tin'])) {
                    $tin = loadone_tin($_GET['ma_tin']);
                }
                if (isset($_POST['luu'])) {
                    $ma_tin = $_POST['ma_tin'];
                    $ten_tin = $_POST['ten_tin'];
                    $ngay_dang = date('Y-m-d');
                    $mo_ta = $_POST['mo_ta'];
                    $hinh = $_FILES['hinh']['name'];
                    $so_luot_xem = $_POST['so_luot_xem'];
                    $ma_loaitin = $_POST['ma_loaitin'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                    } else {
                        echo "Không thế upload file";
                    }
                    update_tin($ma_tin, $ten_tin, $hinh, $mo_ta, $ngay_dang, $so_luot_xem, $ma_loaitin);
                    echo '<script language="javascript">alert("Sửa thành công mã tin ' . $ma_tin . '!"); window.location="index.php?act=tin";</script>';
                }
                $listtin = loadall_tin();
                include "./tin/edit.php";
                break;
            case 'loaisanpham':
                if (isset($_POST['them'])) {
                    $ten_loaisp = $_POST['ten_loaisp'];
                    insert_loai_sp($ten_loaisp);
                    echo '<script language="javascript">alert("Thêm thành công loại ẩm thực ' . $ten_loaisp . '!"); window.location="index.php?act=loaisanpham";</script>';
                }
                if (isset($_GET['ma_loaisp'])) {
                    delete_loai_sp($_GET['ma_loaisp']);
                }
                $listloaisp = loadall_loai_sp();
                include "./loai_sp/loaisanpham.php";
                break;
            case 'edit_loaisanpham':
                if (isset($_POST['luu'])) {
                    $ma_loaisp = $_POST['ma_loaisp'];
                    $ten_loaisp = $_POST['ten_loaisp'];
                    update_loai_sp($ma_loaisp, $ten_loaisp);
                    echo '<script language="javascript">alert("Sửa thành công mã loại ẩm thực ' . $ma_loaisp . '!"); window.location="index.php?act=loaisanpham";</script>';
                }
                include "./loai_sp/edit.php";
                break;
            case 'sanpham':
                if (isset($_POST['them'])) {
                    $ma_sp = $_POST['ma_sp'];
                    $ten_sp = $_POST['ten_sp'];
                    $don_gia = $_POST['don_gia'];
                    $ngay_nhap = date('Y-m-d');
                    $mo_ta = $_POST['mo_ta'];
                    $hinh = $_FILES['hinh']['name'];
                    $so_luot_xem = $_POST['so_luot_xem'];
                    $ma_loaisp = $_POST['ma_loaisp'];
                    $ma_tk = $_POST['ma_tk'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                    } else {
                        echo "Không thế upload file";
                    }
                    insert_san_pham($ten_sp, $don_gia, $hinh, $mo_ta, $ngay_nhap, $so_luot_xem, $ma_loaisp, $ma_tk);
                    echo '<script language="javascript">alert("Thêm thành công ẩm thực ' . $ten_sp . '!"); window.location="index.php?act=sanpham";</script>';
                }
                if (isset($_GET['ma_sp'])) {
                    delete_san_pham($_GET['ma_sp']);
                }
                $listloaisp = loadall_loai_sp();
                $listsp = loadall_san_pham();
                include "./san_pham/sanpham.php";
                break;
            case 'edit_sanpham':
                if (isset($_GET['ma_sp'])) {
                    $sp = loadone_san_pham($_GET['ma_sp']);
                }
                if (isset($_POST['sua'])) {
                    $ma_sp = $_POST['ma_sp'];
                    $ten_sp = $_POST['ten_sp'];
                    $don_gia = $_POST['don_gia'];
                    $ngay_nhap = date('Y-m-d');
                    $mo_ta = $_POST['mo_ta'];
                    $hinh = $_FILES['hinh']['name'];
                    $so_luot_xem = $_POST['so_luot_xem'];
                    $ma_loaisp = $_POST['ma_loaisp'];
                    $ma_tk = $_POST['ma_tk'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                    } else {
                        echo "Không thế upload file";
                    }
                    update_san_pham($ma_sp, $ten_sp, $don_gia, $hinh, $mo_ta, $ngay_nhap, $so_luot_xem, $ma_loaisp, $ma_tk);
                    echo '<script language="javascript">alert("Sửa thành công mã ẩm thực ' . $ma_sp . '!"); window.location="index.php?act=sanpham";</script>';
                }
                $listsp = loadall_san_pham();
                include "./san_pham/edit.php";
                break;
            case 'taikhoan':
                if (isset($_POST['them'])) {
                    $ma_tk = $_POST['ma_tk'];
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = md5($_POST['mat_khau']);
                    $nhap_lai_mat_khau = md5($_POST['nhap_lai_mat_khau']);
                    $email = $_POST['email'];
                    $hinh = $_FILES['hinh']['name'];
                    $vai_tro = $_POST['vai_tro'];
                    $kich_hoat = $_POST['kich_hoat'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (strcmp($mat_khau, $nhap_lai_mat_khau) !== 0) {
                        echo '<script language="javascript">alert("Mật khẩu không khớp! Mời bạn nhập lại!");</script>';
                    } else {
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                        } else {
                            echo "Không thế upload file";
                        }
                        insert_tai_khoan($ma_tk, $ho_ten, $mat_khau, $email, $hinh, $vai_tro, $kich_hoat);
                        echo '<script language="javascript">alert("Thêm thành công tài khoản mã ' . $ma_tk . '!"); window.location="index.php?act=taikhoan";</script>';
                    }

                }
                if (isset($_GET['ma_tk'])) {
                    delete_tai_khoan($_GET['ma_tk']);
                }
                $listtk = loadall_tai_khoan();
                include "./tai_khoan/taikhoan.php";
                break;
            case 'edit_taikhoan':
                if (isset($_GET['ma_tk'])) {
                    $tk = loadone_tai_khoan($_GET['ma_tk']);
                }
                if (isset($_POST['sua'])) {
                    $ma_tk = $_POST['ma_tk'];
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = md5($_POST['mat_khau']);
                    $nhap_lai_mat_khau = md5($_POST['nhap_lai_mat_khau']);
                    $email = $_POST['email'];
                    $hinh = $_FILES['hinh']['name'];
                    $vai_tro = $_POST['vai_tro'];
                    $kich_hoat = $_POST['kich_hoat'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (strcmp($mat_khau, $nhap_lai_mat_khau) !== 0) {
                        echo '<script language="javascript">alert("Mật khẩu không khớp! Mời bạn nhập lại!");window.location="index.php?act=taikhoan";</script>';
                    } else {
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                        } else {
                            echo "Không thế upload file";
                        }
                        update_tai_khoan($ma_tk, $ho_ten, $mat_khau, $email, $hinh, $vai_tro, $kich_hoat);
                        echo '<script language="javascript">alert("Sửa thành công mã tài khoản ' . $ma_tk . '!"); window.location="index.php?act=taikhoan";</script>';
                    }

                }
                $listtk = loadall_tai_khoan();
                include "./tai_khoan/edit.php";
                break;
            case 'tk_binhluan':
                if (isset($_GET['ma_bl'])) {
                    delete_binh_luan($_GET['ma_bl']);
                }
                $listbl = loadall_binh_luan(0);
                include "./thong_ke/binhluan.php";
                break;
            case 'donhang':
                if (isset($_GET['ma_dh'])) {
                    delete_don_hang($_GET['ma_dh']);
                }
                $listdh = loadall_don_hang();
                include "./don_hang/donhang.php";
                break;
            case 'chitietdonhang':
                if (isset($_GET['ma_ctdh'])) {
                    delete_chi_tiet_don_hang($_GET['ma_ctdh']);
                }
                $listctdh = loadall_chi_tiet_don_hang();
                include "./chi_tiet_don_hang/chitietdonhang.php";
                break;
            case 'tk_loaisanpham':
                $listtk = loadall_thongke();
                include "./thong_ke/loaisanpham.php";
                break;
            case 'bieu_do':
                $listtk = loadall_thongke();
                include "thong_ke/bieu_do.php";
                break;
            case 'dangxuat':
                session_unset();
                header("location: ../index.php");
                ob_end_flush();
                break;
            default:
                include "./layout/home.php";
                break;
        }
    } else {
        include "./layout/home.php";
    }

    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>