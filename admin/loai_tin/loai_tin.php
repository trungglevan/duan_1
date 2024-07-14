<div class="col py-3">
    <h3>Loại tin</h3>
    <p class="lead">
    <div class="container">
        <h3 class="alert alert-white text-center">Thêm</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Mã loại tin</label>
                <input class="form-control" name="ma_loaitin" value="Tự động" readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên loại tin</label>
                <input type="text" name="ten_loaitin" class="form-control" required>
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

                    <thead class="row">
                        <tr class="row">
                            <th scope="col" class="col-sm-2 text-center">Mã loại tin</th>
                            <th scope="col" class="col-sm-7 text-center">Tên loại tin</th>
                            <th scope="col" class="col-sm-3 text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></th>
                        </tr>
                    </thead>

                    <tbody class="row">
                        <?php foreach ($listloaitin as $key => $loaitin) {
                            $sualt = "index.php?act=edit_loaitin&ma_loaitin=" . $loaitin['ma_loaitin'];
                            ?>
                            <tr class="row">
                                <td class="col-sm-2 text-center">
                                    <?php echo $loaitin['ma_loaitin'] ?>
                                </td>
                                <td class="col-sm-7 text-center">
                                    <?php echo $loaitin['ten_loaitin'] ?>
                                </td>
                                <td class="col-sm-3 text-center">
                                    <a href="<?= $sualt ?>"><button class="btn btn-light">Sửa</button></a>
                                    <button class="btn btn-light"
                                        onclick="getConfirm(<?php echo $loaitin['ma_loaitin'] ?>)">
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
            const href = "index.php?act=loaitin&ma_loaitin=" + parameter;
            window.location.href = href;
        }
    };
</script>