<div class="col py-3">
    <h3>Loại tin</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <?php
            if (isset($_GET['ma_loaitin'])) {
                $lt = loadone_loai_tin($_GET['ma_loaitin']);
            }
            if (is_array($lt)) {
                extract($lt);
            }
            ?>
            <div class="container">
                <h3 class="alert alert-white text-center">Sửa</h3>
                <form for="index.php?act=edit_loaitin" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Mã loại tin</label>
                        <input class="form-control" name="ma_loaitin" value="<?php echo $ma_loaitin ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên loại tin</label>
                        <input type="text" name="ten_loaitin" class="form-control" value="<?php echo $ten_loaitin ?>"
                            required>
                    </div>
                    <button type="submit" name="luu" class="btn btn-primary">Lưu</button>
                </form>
            </div>

        </li>
    </ul>
</div>
</div>
</div>