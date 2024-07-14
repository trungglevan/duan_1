<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <div class="">
        <div class="card-body d-flex row">
            <?php
            $muangay = array();
            $onesp = loadone_san_pham($ma_sp);
            extract($onesp);
            $muangay[] = $onesp;
            if (isset($_POST['dathang'])) {
                $trang_thai = $_POST['trang_thai'];
                $so_luong = $_POST['so_luong'];
                $ngay_mua = date('Y-m-d');
                $ma_tk = $_SESSION['user']['ma_tk'];
                $tong_tien = $don_gia * $so_luong;
                $lastInsertedId = insert_don_hang($trang_thai, $so_luong, $tong_tien, $ngay_mua, $ma_tk);
                $sql_ctdonhang = "";
                foreach ($muangay as $key => $mon) {
                    $sql_ctdonhang .= "('$so_luong', '" . $mon['don_gia'] . "', '" . $mon['ma_sp'] . "', '$lastInsertedId', '" . $mon['ten_sp'] . "','" . $mon['hinh'] . "')";
                }
                $insert_ctdonhang = "insert into chi_tiet_don_hang(so_luong, don_gia, ma_sp, ma_dh, ten_sp, hinh) VALUES " . $sql_ctdonhang . "";
                if ($trang_thai == 1) {
                    if (!pdo_execute($insert_ctdonhang) && $lastInsertedId) {
                        unset($_SESSION['gio_hang']);
                        header("location: index.php?act=chuyenkhoan");
                    }
                } else {
                    if (!pdo_execute($insert_ctdonhang) && $lastInsertedId) {
                        unset($_SESSION['gio_hang']);
                        echo '<script language="javascript">alert("Đặt đồ ăn thành công!");</script>';
                    }
                }
            }
            $hinh = "../../../duan_1/admin/uploads/" . $hinh;
            ?>
            <div class="row">
                <div class="img col-sm-7">
                    <img src="<?= $hinh ?>" alt="" alt="" width="100%" height="">
                </div>
                <div class="col-sm-5">
                    <div class="information">
                        <li>Mã sản phẩm:
                            <?= $ma_sp ?>
                        </li>
                        <li>Tên sản phẩm:
                            <?= $ten_sp ?>
                        </li>
                        <li>Đơn giá:
                            <?= number_format($don_gia, 0, ",", ".") ?>VNĐ
                        </li>
                    </div>
                    <div class="content">Mô tả:
                        <?= $mo_ta ?>
                    </div>
                    <div class="">
                        <form action="index.php?act=giohang" method="post" class="col-sm-12">
                            <span>Số lượng:</span>
                            <input type="number" min="1" value="1" name="so_luong_gio"
                                style="width:40px; height:25px; border-radius: 5px; text-align: center;"></input>
                            <input type="hidden" name="ma_sp" value="<?= $ma_sp ?>">
                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                            <input type="hidden" name="hinh" value="<?= $hinh ?>">
                            <input type="hidden" name="don_gia" value="<?= $don_gia ?>">
                            <input type="submit" name="them" value="Thêm vào giỏ hàng" class="btn btn-danger col-sm-12">
                        </form>
                        <button type="button" class="btn btn-primary col-sm-12" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Đặt hàng
                        </button>

                    </div>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="" class="form-label">Tên món ăn</label>
                                        <input type="text" class="form-control" value="<?= $ten_sp ?>" name="ten_dh"
                                            readonly>
                                        <label for="" class="form-label">Ảnh </label>
                                        <img src="<?= $hinh ?>" alt="" class="form-control">
                                        <label for="" class="form-label">Số lượng</label>
                                        <input type="number" class="form-control" value="1" name="so_luong" min="1"
                                            step="1">
                                        <label for="" class="form-label">Đơn giá</label>
                                        <input type="" class="form-control"
                                            value="<?= number_format($don_gia, 0, ",", ".") ?> VNĐ" name="don_gia"
                                            readonly>
                                        <label for="" class="form-label">Phương thức thanh toán</label>
                                        <div class="form-control">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="trang_thai" value="1"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Chuyển khoản
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="trang_thai" value="0"
                                                    id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Thanh toán khi nhận hàng
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <span>Tổng giá tiền: </span>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Hủy</button>
                                        <button type="submit" class="btn btn-primary" name="dathang">Đặt hàng</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="">
        <div class="card-header">BÌNH LUẬN</div>
        <div class="card-body">
            <div class="conten_bl">
                <?php
                $dsbl = loadall_binh_luan($ma_sp);
                foreach ($dsbl as $bl) {
                    extract($bl); ?>
                    <table class="row">
                        <tr class="row col-sm-12">
                            <td class="col-sm-4 text-center">
                                <?= $noi_dung ?>
                            </td>
                            <td class="col-sm-4 text-center">
                                <?= $ma_tk ?>
                            </td>
                            <td class="col-sm-4 text-center">
                                <?= $ngay_bl ?>
                            </td>
                        </tr><br>
                    </table>

                <?php }
                ?>
            </div>
        </div>
        <div class="card-footer" style="margin-bottom: 10px;">
            <form action="" method="post" class="row">
                <input type="text" name="noi_dung" class="col-sm-11" required>
                <button type="submit" name="gui" class="col-sm-1 btn btn-primary">Gửi</button>
            </form>
            <?php
            if (isset($_POST['gui'])) {
                $noi_dung = $_POST['noi_dung'];
                $ma_sp = $_GET['ma_sp'];
                $ma_tk = $_SESSION['user']['ma_tk'];
                $ngay_bl = date('Y/m/d');
                insert_binhluan($noi_dung, $ngay_bl, $ma_sp, $ma_tk);
                header("location: index.php?act=sanphamct&ma_sp=" . $ma_sp);
            }
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>