<?php
$servername = "localhost";
$username = "trungglevan";
$password = "220204Trungg@";
$dbname = "duan_1";
$email_value = $_GET['email'];
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['luu'])) {
    $mat_khau = md5($_POST['mat_khau']);
    $nhap_lai_mat_khau = md5($_POST['nhap_lai_mat_khau']);
    if (strcmp($mat_khau, $nhap_lai_mat_khau) !== 0) {
        echo 'Mật khẩu không khớp!';
    } else {
        $sql = "update tai_khoan set mat_khau = '$mat_khau' where email = '$email_value'";
        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
        echo '<script language="javascript">alert("Đổi mật khẩu thành công!"); window.location="../../";</script>';
        // header("Location: ../../");
    }
}


?>
<form class="form" method="post">
    <label>
        <span>Mật Khẩu :</span>
        <input required="" placeholder="" type="password" class="input" name="mat_khau">
    </label>
    <label>
        <span>Xác Nhận Mật Khẩu :</span>
        <input required="" placeholder="" type="password" class="input" name="nhap_lai_mat_khau">
    </label>

    <button class="submit" name="luu">Lưu</button>
</form>