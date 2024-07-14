<div class="col py-3">
    <h3>Thống kê loại ẩm thực</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <div class="container">
                <h3 class="alert alert-white text-center">Danh sách</h3>
                <table class="table">
                    <caption><a href="index.php?act=bieu_do" class="btn btn-primary">Xem biểu đồ</a></caption>
                    <thead class="">
                        <tr class="">
                            <th scope="col" class=" text-center">Mã loại ẩm thực</th>
                            <th scope="col" class=" text-center">Tên loại ẩm thực</th>
                            <th scope="col" class=" text-center">Số lượng</th>
                            <th scope="col" class=" text-center">Giá cao nhất</th>
                            <th scope="col" class=" text-center">Giá thấp nhất</th>
                            <th scope="col" class=" text-center">Giá trung bình</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($listtk as $tk) {
                            extract($tk); ?>
                            <tr class="">
                                <td class=" text-center">
                                    <?= $ma_loai_sp ?>
                                </td>
                                <td class=" text-center">
                                    <?= $ten_loai_sp ?>
                                </td>
                                <td class=" text-center">
                                    <?= $countsp ?>
                                </td>
                                <td class=" text-center">
                                    <?= number_format($maxgia, 0, ",", ".") ?> VNĐ
                                </td>
                                <td class=" text-center">
                                    <?= number_format($mingia, 0, ",", ".") ?> VNĐ
                                </td>
                                <td class=" text-center">
                                    <?= number_format($giatb, 0, ",", ".") ?> VNĐ
                                </td>
                            </tr>
                            <?php
                        } ?>




                    </tbody>
                </table>
            </div>
        </li>
    </ul>
</div>
</div>
</div>