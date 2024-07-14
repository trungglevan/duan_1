<div class="col py-3">
    <h3>Loại ẩm thực</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <?php
            if (isset($_GET['ma_loaisp'])) {
                $lsp = loadone_loai_sp($_GET['ma_loaisp']);
            }
            if (is_array($lsp)) {
                extract($lsp);
            }
            ?>
            <div class="container">
                <h3 class="alert alert-white text-center">Sửa</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Mã loại ẩm thực</label>
                        <input class="form-control" name="ma_loaisp" value="<?php echo $ma_loaisp ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên loại ẩm thực</label>
                        <input type="text" name="ten_loaisp" class="form-control" value="<?php echo $ten_loaisp ?>"
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