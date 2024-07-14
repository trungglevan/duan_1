<div class="container">
  <div class="row">
    <div class="alert alert-light">GIỎ HÀNG</div>
    <table>
      <tr>
        <th class="text-center">Hình</th>
        <th class="text-center">Sản phẩm</th>
        <th class="text-center">Đơn giá</th>
        <th class="text-center">Số lượng</th>
        <th class="text-center">Thành tiền</th>
        <th class="text-center">Thao tác</th>
      </tr>

      <?php
      $tong = 0;
      $i = 0;
      foreach ($_SESSION['gio_hang'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        $delsp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa" ></a>';
        $i += 1; ?>
        <tr style="margin-bottom: 10px;">
          <td class="text-center"><img src="<?= $cart[2] ?>" alt="Ảnh" height="80px" width="140px"></td>
          <td class="text-center">
            <?= $cart[1] ?>
          </td>
          <td class="text-center">
            <?= number_format($cart[3], 0, ",", ".") ?> VNĐ
          </td>
          <td class="text-center">
            <?= $cart[4] ?>
          </td>
          <td class="text-center">
            <?= number_format($thanhtien, 0, ",", ".") ?> VNĐ
          </td>
          <td class="text-center">
            <?= $delsp ?>
          </td>
        </tr>
      <?php } ?>
      <tr>
        <td colspan="4"></td>
        <td class="text-center">Tổng tiền:
          <?= number_format($tong, 0, ",", ".") ?> VNĐ
        </td>
        <td></td>
      </tr>
      <?php ?>
    </table>
  </div>
  <?php
  if (isset($_POST['dat_hang_gio'])) {
    $don_gia = $tong;
    $so_luong = 0;
    $trang_thai = $_POST['trang_thai'];
    $ngay_mua = date('Y-m-d');
    $ma_tk = $_SESSION['user']['ma_tk'];
    foreach ($_SESSION['gio_hang'] as $key => $mon) {
      $so_luong += $mon[4];
    }
    $lastInsertedId = insert_don_hang($trang_thai, $so_luong, $don_gia, $ngay_mua, $ma_tk);
    $sql_ctdonhang = "";
    foreach ($_SESSION['gio_hang'] as $key => $mon) {
      $sql_ctdonhang .= "('" . $mon[4] . "', '" . $mon[3] . "', '" . $mon[0] . "', '$lastInsertedId', '" . $mon[1] . "', '" . $mon[2] . "')";
      if ($key != count($_SESSION['gio_hang']) - 1) {
        $sql_ctdonhang .= ",";
      }
    }
    $insert_ctdonhang = "insert into chi_tiet_don_hang(so_luong, don_gia, ma_sp, ma_dh, ten_sp, hinh) VALUES " . $sql_ctdonhang . "";
    if ($trang_thai == 1) {
      if (!pdo_execute($insert_ctdonhang) && $lastInsertedId) {
        unset($_SESSION['gio_hang']);
        header("location: index.php?act=chuyenkhoan");
      }
      ob_end_flush();
    } else {
      if (!pdo_execute($insert_ctdonhang) && $lastInsertedId) {
        unset($_SESSION['gio_hang']);
        echo '<script language="javascript">alert("Đặt đồ ăn thành công!");</script>';
      }
    }

  }
  ?>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Đặt hàng
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="" method="post">
        <div class="modal-content">
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tên món ăn</th>
                  <th scope="col">Ảnh</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Đơn giá</th>
                  <th scope="col">Thành tiền</th>
                </tr>
              </thead>
              <?php foreach ($_SESSION['gio_hang'] as $key => $mon) {
                $thanh_tien = $mon[3] * $mon[4];
                ?>
                <tbody>
                  <tr>
                    <th scope="row">
                      <?= $mon[1] ?>
                    </th>
                    <td><img src="<?= $mon[2] ?>" alt="" width="50px"></td>
                    <td>
                      <?= $mon[4] ?>
                    </td>
                    <td>
                      <?= number_format($mon[3], 0, ",", ".") ?>VNĐ
                    </td>
                    <td>
                      <?= number_format($thanh_tien, 0, ",", ".") ?>VNĐ
                    </td>
                  </tr>
                </tbody>
              <?php } ?>
              <tfoot>
                <td colspan="5">Tổng tiền:
                  <?= number_format($tong, 0, ",", ".") ?>
                </td>
              </tfoot>
              <tfoot>
                <td colspan="5">
                  <div class="form-control d-flex">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="trang_thai" value="1" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Chuyển khoản
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="trang_thai" value="0" id="flexRadioDefault2"
                        checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Thanh toán khi nhận hàng
                      </label>
                    </div>
                  </div>
                </td>
              </tfoot>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-primary" name="dat_hang_gio">Đặt hàng</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>