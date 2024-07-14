<div class="col py-3">
    <h3>Tin tức</h3>
    <p class="lead">
    <div class="container">
        <h3 class="alert alert-white text-center">Thêm</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Mã tin</label>
                <input class="form-control" name="ma_tin" value="Tự động" readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên tin</label>
                <input type="text" name="ten_tin" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh</label>
                <input type="file" name="hinh" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Số lượt xem</label>
                <input name="so_luot_xem" class="form-control" type="number" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mã loại tin</label>
                <select name="ma_loaitin" class="form-control" input>
                    <?php foreach ($listloaitin as $loaitin) {
                        extract($loaitin); ?>
                        <option value="<?php echo $ma_loaitin; ?>">
                            <?php echo $ten_loaitin; ?>
                        </option>
                    <?php } ?>
                </select>
                <!-- <input type="text" name="ma_loaitin" class="form-control"> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mã tài khoản</label>
                <input type="text" name="ma_tk" class="form-control" value="<?php echo $_SESSION['user']['ma_tk']; ?>"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mô tả</label> <br>
                <textarea name="mo_ta" cols="100%" rows="5" required></textarea>
            </div>
            <button type="submit" name="them" class="btn btn-primary">Thêm</button>
        </form>
    </div>
    </p>
    <ul class="list-unstyled">
        <li>
            <div class="container">
                <h3 class="alert alert-white text-center">Danh sách</h3>
                <table class="table">
                    <thead class="">
                        <tr class="">
                            <th scope="col" class=" text-center">Mã tin</th>
                            <th scope="col" class=" text-center">Tên tin</th>
                            <th scope="col" class=" text-center">Hình ảnh</th>
                            <th scope="col" class=" text-center">Mô tả</th>
                            <th scope="col" class=" text-center">Ngày đăng</th>
                            <th scope="col" class=" text-center">Số lượt xem</th>
                            <th scope="col" class=" text-center">Mã loại tin</th>
                            <th scope="col" class=" text-center">Mã tài khoản</th>
                            <th scope="col" class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($listtin as $tin) {
                            extract($tin);
                            $suatin = "index.php?act=edit_tin&ma_tin=" . $ma_tin; ?>
                            <tr class="">
                                <td class=" text-center">
                                    <?= $ma_tin ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ten_tin ?>
                                </td>
                                <td class=" text-center"><img src="../admin/uploads/<?= $hinh ?>" alt="<?= $hinh ?>"
                                        width="100"></td>
                                <td class=" text-center">
                                    <?= $mo_ta ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ngay_dang ?>
                                </td>
                                <td class=" text-center">
                                    <?= $so_luot_xem ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ma_loaitin ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ma_tk ?>
                                </td>
                                <td class=" text-center"><a href="<?= $suatin ?>"><button
                                            class="btn btn-light">Sửa</button></a>
                                    <button class="btn btn-light" onclick="getConfirm(<?= $ma_tin ?>)">
                                        Xóa
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>



                    </tbody>
                </table>
            </div>
        </li>
    </ul>
</div>
</div>
</div>
<script>
    function getConfirm(parameter) {
        let text = "Bạn có muốn xóa mã loại tin " + parameter + "!\nNhấn OK để xóa.";
        if (confirm(text) == true) {
            const href = "index.php?act=tin&ma_tin=" + parameter;
            window.location.href = href;
        }
    };
</script>