<?php
ob_start();
session_start();
include "./model/pdo.php";
include "./model/loai_tin.php";
include "./model/loai_sp.php";
include "./model/tai_khoan.php";
include "./model/tin.php";
include "./model/san_pham.php";
include "./model/binh_luan.php";
include "./model/don_hang.php";
include "./model/chi_tiet_don_hang.php";
$list_loaisp = loadall_loai_sp();
$list_top = loadall_san_pham_top10();
include "./view/layout.php//header.php";
if (!isset($_SESSION['gio_hang'])) {
    $_SESSION['gio_hang'] = [];
}


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $ma_tk = $_POST['ma_tk'];
                $mat_khau = md5($_POST['mat_khau']);
                $checkuser = checkuser($ma_tk, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    echo '<script language="javascript">alert("Tên đăng nhập hoặc mật khẩu không trùng khớp!");</script>';
                }

            }
            include "./view/dangnhap.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky'])) {
                $ma_tk = $_POST['ma_tk'];
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = md5($_POST['mat_khau']);
                $nhap_lai_mat_khau = md5($_POST['nhap_lai_mat_khau']);
                $email = $_POST['email'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "./admin/uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (strcmp($mat_khau, $nhap_lai_mat_khau) !== 0) {
                    echo 'Mật khẩu không khớp!';
                } else {
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                    } else {
                        echo "Không thế upload file";
                    }
                    insert_tai_khoan_user($ma_tk, $ho_ten, $mat_khau, $email, $hinh);
                    $linkKH = "http://localhost/duan_1/view/status.php?email=" . $email;
                    $to_Mail = $email;
                    $subject = "Xác nhận tài khoản";
                    $body = "
                                Xin chào,
    
                                Bạn đã đăng ký thành công tài khoản trên website. Để kích hoạt tài khoản, vui lòng nhấp vào liên kết bên dưới:
                                $linkKH    
                                Nếu bạn không yêu cầu đăng ký tài khoản, vui lòng bỏ qua email này.";
                    $headers = 'From: trungcutekt@gmail.com';
                    $headers .= 'MIME-Version: 1.0';
                    $headers .= 'Content-Type: text/plain; charset=UTF-8';
                    mail($to_Mail, $subject, $body, $headers);
                    echo '<script language="javascript">alert("Kiểm tra email ' . $email . '!");</script>';
                }

            }
            include "./view/dangky.php";
            break;
        case 'quenmk':
            if (isset($_POST['gui'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $linkKH = "http://localhost/duan_1/view/doi_mat_khau.php/?email=" . $email;
                    $to_Mail = $email;
                    $subject = "Đổi mật khẩu";
                    $body = "
                Xin chào!!

                Để đổi mật khẩu, vui lòng nhấp vào liên kết bên dưới:
                $linkKH";

                    $headers = 'From: trungcutekt@gmail.com';
                    $headers .= 'MIME-Version: 1.0';
                    $headers .= 'Content-Type: text/plain; charset=UTF-8';
                    mail($to_Mail, $subject, $body, $headers);
                    echo '<script language="javascript">alert("Kiểm tra email ' . $email . '!");</script>';
                } else {
                    echo '<script language="javascript">alert("Email không tồi tại!");</script>';
                }
            }
            include "./view/quenmk.php";
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ma_loaisp']) && ($_GET['ma_loaisp'] > 0)) {
                $ma_loaisp = $_GET['ma_loaisp'];

            } else {
                $ma_loaisp = 0;
            }
            $dssp = searcha($kyw, $ma_loaisp);
            $ten_loaisp = load_ten_loaisp($ma_loaisp);

            include "./view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['ma_sp']) && ($_GET['ma_sp'] > 0)) {
                $ma_sp = $_GET['ma_sp'];
                $onesp = loadone_san_pham($ma_sp);
                extract($onesp);
                tang_luot_xem($ma_sp);
                include "./view/sanphamct.php";
            } else {
                include "./view/layout.php/home.php";
            }
            break;
        case 'tintuc':
            $list_tinnb = loadall_tin_nb();
            $listtin = loadall_tin();
            include "./view/tin_tuc.php";
            break;
        case 'tintucct':
            if (isset($_GET['ma_tin']) && ($_GET['ma_tin'] > 0)) {
                $ma_tin = $_GET['ma_tin'];
                $onetin = loadone_tin($ma_tin);
                extract($onetin);
                tangluotxemtin($ma_tin);
                include "./view/tintucct.php";
            } else {
                include "./view/layout.php/home.php";
            }
            break;
        case 'lienhe':
            include "./view/lienhe.php";
            break;
        case 'giohang':
            if (isset($_POST['them'])) {
                $ma_sp = $_POST['ma_sp'];
                $ten_sp = $_POST['ten_sp'];
                $hinh = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                $so_luong = $_POST['so_luong_gio'];
                $thanhtien = $so_luong * $don_gia;
                $spadd = [$ma_sp, $ten_sp, $hinh, $don_gia, $so_luong, $thanhtien];
                // array_push($_SESSION['gio_hang'],$spadd);
                if (empty($_SESSION['gio_hang'])) {
                    array_push($_SESSION['gio_hang'], $spadd);
                } else {
                    $tmp = 0;
                    foreach ($_SESSION['gio_hang'] as $key => $sp) {
                        if ($sp[0] == $ma_sp) {
                            $tmp++;
                            $_SESSION['gio_hang'][$key][4] += $so_luong;
                            // include "./view/giohang.php";
                            break;
                        }
                    }
                    if ($tmp == 0) {
                        array_push($_SESSION['gio_hang'], $spadd);
                    }

                }
            }
            include "./view/giohang.php";
            break;
        case 'chuyenkhoan':

            include "./view/formchuyenkhoan.php";
            break;
        case 'gioithieu':

            include "./view/gioithieu.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['gio_hang'], $_GET['idcart'], 1);
            } else {
                $_SESSION['gio_hang'] = [];
            }
            header('Location: index.php?act=giohang');
            break;
        case 'gdnd':
            if (isset($_POST['luu'])) {
                $ma_tk = $_POST['ma_tk'];
                $ho_ten = $_POST['ho_ten'];
                $mat_khau = md5($_POST['mat_khau']);
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo " Tệp " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được tải lên.";
                } else {
                    echo "Không thế upload file";
                }
                update_tai_khoan_user($ma_tk, $ho_ten, $mat_khau, $hinh);
                echo '<script language="javascript">alert("Sửa thành công mã tài khoản ' . $ma_tk . '!"); window.location="index.php?act=gdnd";</script>';
            }
            include "./view/user.php";
            break;
        case 'dangxuat':
            session_unset();
            header('location: index.php');
            break;
        default:
            include "./view/layout.php/home.php";
            break;
    }
} else {
    include "./view/layout.php/home.php";
}
include "./view/layout.php/footer.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wma_spth=device-wma_spth, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/from.css">
</head>

<body>

</body>

</html>