<div class="col py-3">
    <h3>Tin tức</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <?php
            if (is_array($tin)) {
                extract($tin);
                
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
                        <label for="" class="form-label">Mã tin</label>
                        <input class="form-control" name="ma_tin" value="<?= $ma_tin ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên tin</label>
                        <input type="text" name="ten_tin" class="form-control" value="<?= $ten_tin ?>" required>
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
                        <label for="" class="form-label">Mã loại tin</label>
                        <select name="ma_loaitin" class="form-control" input>
                            <?php
                            foreach ($listloaitin as $loaitin) {

                                if ($loaitin['ma_loaitin'] == $ma_loaitin)
                                    $s = "selected";
                                else
                                    $s = "";
                                echo '<option value="' . $loaitin['ma_loaitin'] . '" ' . $s . '>' . $loaitin['ten_loaitin'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả</label> <br>
                        <textarea name="mo_ta" cols="100%" rows="5" required><?= $mo_ta ?></textarea>
                    </div>
                    <button type="submit" name="luu" class="btn btn-primary">Lưu</button>
                </form>
            </div>

        </li>
    </ul>
</div>
</div>
</div>