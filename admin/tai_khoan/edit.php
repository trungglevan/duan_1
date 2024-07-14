<div class="col py-3">
    <h3>Tài khoản</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <?php
            if (is_array($tk)) {
                extract($tk);
                
            }
            $hinhpath = "../upload/" . $hinh;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='100'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <div class="container">
                <h3 class="alert alert-white text-center">Sửa</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Mã tài khoản</label>
                        <input class="form-control" name="ma_tk" type="text" value="<?= $ma_tk ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?= $email ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Họ và tên</label>
                        <input type="text" name="ho_ten" class="form-control" value="<?= $ho_ten ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mật khẩu</label>
                        <input type="password" name="mat_khau" class="form-control" value="<?= $mat_khau ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" name="nhap_lai_mat_khau" class="form-control" value="<?= $mat_khau ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label>
                        <input type="file" name="hinh" class="form-control" value="<?= $hinh ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Vai trò</label>
                        <div class="form-control">
                            <label for=""><input type="radio" name="vai_tro" value="0">Khách hàng</label>
                            <label for=""><input type="radio" name="vai_tro" value="1" checked>Quản trị viên</label>
                        </div>
                    </div>
                    <button type="submit" name="sua" class="btn btn-primary">Lưu</button>
                </form>
            </div>

        </li>
    </ul>
</div>
</div>
</div>