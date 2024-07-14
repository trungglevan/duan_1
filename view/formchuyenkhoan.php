<?php
if (isset($_POST['chuyenkhoan'])) {
    $ten_nh = $_POST['ten_nh'];
    $so_tknh = $_POST['so_tknh'];
    // $ten_tknh = $_POST['ten_tknh'];
    // $so_tien = $_POST['so_tien'];
    // $noi_dungck = $_POST['noi_dungck'];
    echo '<script language="javascript">alert("Đặt đồ ăn thành công !");window.location="index.php";</script>';
}
?>
<form class="form" action="" method="post">
    <p class="title">Chuyển khoản</p>
    <label>
        <select value="Chọn ngân hàng" input class="input" required>
            <option value="">Ngân hàng</option>
            <option value="">Quân đội (MB)</option>
            <option value="">Công Thương Việt Nam (VIETINBANK)</option>
            <option value="">Ngoại thương Việt Nam (VIETCOMBANK, VCB)</option>
            <option value="">Đầu tư và phát triển Việt Nam (BIDV)</option>
        </select>
    </label>
    <label>
        <input required placeholder="" type="number" class="input" name="so_tknh">
        <span>Số tài khoản:</span>
    </label>
    <label>
        <input required placeholder="" type="text" class="input" name="ten_tknh">
        <span>Tên tài khoản:</span>
    </label>
    <label>
        <input required placeholder="" type="number" class="input" name="so_tien">
        <span>Số tiền:</span>
    </label>
    <label>
        <input required placeholder="" type="text" class="input" name="noi_dungck">
        <span>Nội dung chuyển khoản:</span>
    </label>
    <button type="submit" name="chuyenkhoan" class="submit">Chuyển</button>
</form>