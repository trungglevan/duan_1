<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .list-group-item {
            border: none;
            border-bottom: 1px solid black;
        }

        .list_2 {
            border-bottom: 1px solid black;
            margin-bottom: 10px;
        }

        .content {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row tieude">
            <div class="alert text-center" role="alert">
                Cập nhập những tin tức mới nhất từ ...
            </div>
            <ul class="list-group col-sm-8">
                <?php
                foreach ($list_tinnb as $tinnb) {
                    extract($tinnb);
                    $linktin = "index.php?act=tintucct&ma_tin=" . $ma_tin;
                    $hinh = "../../../duan_1/admin/uploads/" . $hinh; ?>
                    <li class="list-group-item d-flex">
                        <a href="<?= $linktin ?>"><img src="<?= $hinh ?>" alt="" width="420px" height="363"></a>
                        <div class="content">
                            <h3>
                                <?= $ten_tin ?>
                            </h3>
                            <p>
                                <?= substr($mo_ta, 0, 300) ?>...
                            </p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="col-sm-4">

                <div class="row d-flex">
                    <?php
                    foreach ($listtin as $tin) {
                        extract($tin);
                        $hinh = "../../../duan_1/admin/uploads/" . $hinh; ?>
                        <div class="col-sm-6 list_2">
                            <a href="<?= $linktin ?>"><img src="<?= $hinh ?>" alt="abc" width="100%" height="131"></a>
                            <div class="name text-center">
                                <h6>
                                    <?= $ten_tin ?>
                                </h6>
                            </div>
                            <div class="price text-center">
                                <?= substr($mo_ta, 0, 30) ?>...
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>

</html>