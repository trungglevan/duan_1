<div class="col py-3">
    <h3>Đơn hàng</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <div class="container">
                <h3 class="alert alert-white text-center">Danh sách</h3>
                <table class="table">
                    <thead class="">
                        <tr class="">
                            <th scope="col" class=" text-center">Mã đơn hàng</th>
                            <th scope="col" class=" text-center">Trạng thái</th>

                            <th scope="col" class=" text-center">Số lượng</th>
                            <th scope="col" class=" text-center">Đơn giá</th>
                            <th scope="col" class=" text-center">Ngày mua</th>
                            <th scope="col" class=" text-center">Mã tài khoản</th>
                            <th scope="col" class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($listdh as $dh) {
                            extract($dh); ?>
                            <tr class="">
                                <td class=" text-center">
                                    <?= $ma_dh ?>
                                </td>
                                <td class=" text-center">
                                    <?= $trang_thai ?>
                                </td>

                                <td class=" text-center">
                                    <?= $so_luong ?>
                                </td>
                                <td class=" text-center">
                                    <?= number_format($don_gia, 0, ",", ".") ?> VNĐ
                                </td>
                                <td class=" text-center">
                                    <?= $ngay_mua ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ma_tk ?>
                                </td>
                                <td class=" text-center">
                                    <button class="btn btn-light" onclick="getConfirm(<?= $ma_dh ?>)">
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
        let text = "Bạn có muốn xóa mã đơn hàng " + parameter + "!\nNhấn OK để xóa.";
        if (confirm(text) == true) {
            const href = "index.php?act=donhang&ma_dh=" + parameter;
            window.location.href = href;
        }
    }
</script>