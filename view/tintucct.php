<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
$hinh = "../../../duan_1/admin/uploads/" . $hinh;
?>
<div class="container">
    <div class="cart mb-3">
        <img src="<?= $hinh ?>" class="card-img-top" alt="" height="50%">
        <div class="card-body">
            <h5 class="card-title">
                <?= $ten_tin ?>
            </h5>
            <p class="card-text">
                <?= $mo_ta ?>
            </p>
            <p class="card-text"><small class="text-muted">
                    <?= $ngay_dang ?>
                </small></p>
        </div>
    </div>
</div>