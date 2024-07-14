<style>
    .img img {
        width: 50%;
        max-height: 300;
        border-radius: 50%;
    }
</style>
<div class="container">
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
        $tai_khoan = loadone_tai_khoan($ma_tk);
        if (is_array($tai_khoan)) {
            extract($tai_khoan);
        }
        $hinh = "../../../duan_1/admin/uploads/" . $hinh;
        echo '
            <div class="card text-center">
                <div class="img">
                    <img src="' . $hinh . '" value="" class="card-img-top" alt="ảnh" style:"width: 50%;">
                </div>
            </div>    
            ';
    }
    ?>
    <form enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Mã tài khoản</label>
            <input type="text" class="form-control" name="ma_tk" value="<?= $ma_tk ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="ho_ten" value="<?= $ho_ten ?>" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="mat_khau" value="<?= $mat_khau ?>" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hình</label>
            <input type="file" class="form-control" name="hinh" value="<?= $hinh ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="luu">Lưu</button>

    </form>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>