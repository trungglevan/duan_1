<div class="col py-3">
    <h3>Tài khoản</h3>
    <p class="lead">
    <div class="container">
        <h3 class="alert alert-white text-center">Thêm</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Mã tài khoản</label>
                <input class="form-control" name="ma_tk" type="text">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Họ và tên</label>
                <input type="text" name="ho_ten" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mật khẩu</label>
                <input type="password" name="mat_khau" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" name="nhap_lai_mat_khau" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh</label>
                <input type="file" name="hinh" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="">Vai trò</label>
                <div class="form-control">
                    <label for=""><input type="radio" name="vai_tro" value="0">Khách hàng</label>
                    <label for=""><input type="radio" name="vai_tro" value="1" checked>Quản trị viên</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="">Kích hoạt</label>
                <div class="form-control">
                    <label for=""><input type="radio" name="kich_hoat" value="0">Chưa kích hoạt</label>
                    <label for=""><input type="radio" name="kich_hoat" value="1" checked>Kích hoạt</label>
                </div>
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
                            <th scope="col" class=" text-center">Mã tài khoản</th>
                            <th scope="col" class=" text-center">Họ tên</th>
                            <th scope="col" class=" text-center">Mật khẩu</th>
                            <th scope="col" class=" text-center">Email</th>
                            <th scope="col" class=" text-center">Hình ảnh</th>
                            <th scope="col" class=" text-center">Vai trò</th>
                            <th scope="col" class=" text-center">Kích hoạt</th>
                            <th scope="col" class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($listtk as $tk) {
                            extract($tk);
                            $suatk = "index.php?act=edit_taikhoan&ma_tk=" . $ma_tk; ?>
                            <tr class="">
                                <td class=" text-center">
                                    <?= $ma_tk ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ho_ten ?>
                                </td>
                                <td class=" text-center">
                                    <?= md5($mat_khau) ?>
                                </td>
                                <td class=" text-center">
                                    <?= $email ?>
                                </td>
                                <td class=" text-center"><img src="../admin/uploads/<?= $hinh ?>" alt="<?= $hinh ?>"
                                        width="100"></td>
                                <td class=" text-center">
                                    <?= $vai_tro ?>
                                </td>
                                <td class=" text-center">
                                    <?= $kich_hoat ?>
                                </td>
                                <td class=" text-center"><a href="<?= $suatk ?>"><button
                                            class="btn btn-light">Sửa</button></a>

                                    <button class="btn btn-light btn-delete" id="<?= $ma_tk ?>">
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
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("btn-delete")) {
            const id = e.target.id;
            let text = "Bạn có muốn xóa mã tài khoản " + id + "!\nNhấn OK để xóa.";
            if (confirm(text) == true) {
                const href = "index.php?act=taikhoan&ma_tk=" + id;
                window.location.href = href;
            }
        }
    });
</script>