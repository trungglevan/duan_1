<div class="col py-3">
    <h3>Ẩm thực</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <?php
            if (is_array($sp)) {
                extract($sp);
                
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
                        <label for="" class="form-label">Mã sản phẩm</label>
                        <input class="form-control" name="ma_sp" value="<?= $ma_sp ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="ten_sp" class="form-control" value="<?= $ten_sp ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Đơn giá</label>
                        <input type="number" name="don_gia" class="form-control" min="10000" max="500000" step="1"
                            value="<?= $don_gia ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh</label>
                        <input type="file" name="hinh" class="form-control" value="<?= $hinh ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Số lượt xem</label>
                        <input name="so_luot_xem" class="form-control" type="number" value="<?= $so_luot_xem ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mã loại sản phẩm</label>
                        <select name="ma_loaisp" class="form-control" input>
                            <?php
                            foreach ($listloaisp as $loaisp) {

                                if ($loaisp['ma_loaisp'] == $ma_loaisp)
                                    $s = "selected";
                                else
                                    $s = "";
                                echo '<option value="' . $loaisp['ma_loaisp'] . '" ' . $s . '>' . $loaisp['ten_loaisp'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mã tài khoản</label>
                        <input type="text" name="ma_tk" class="form-control" value="<?= $ma_tk ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả</label> <br>
                        <textarea name="mo_ta" cols="100%" rows="5" required><?= $mo_ta ?></textarea>
                    </div>
                    <button type="submit" name="sua" class="btn btn-primary">Lưu</button>
                </form>
            </div>

        </li>
    </ul>
</div>
</div>
</div>