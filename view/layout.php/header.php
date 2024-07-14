<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<div id="wrapper">

    <div id="header">
        <a href="./" class="logo">
            <img src="../../../duan_1/view/image/logo.png" alt="">
        </a>
        <div id="menu">
            <div class="item">
                <a href="./">Trang chủ </a>
            </div>
            <div class="item">
                <a href="index.php?act=gioithieu">Giới thiệu </a>
            </div>
            <!-- <div class="item">
                <a href="index.php?act=sanpham">Món ăn</a>
            </div> -->
            <div class="dropdown item">
                <a class=" dropdown-toggle" type="" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Món ăn
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php
                    foreach ($list_loaisp as $loai_sp) {
                        extract($loai_sp);
                        $link = "index.php?act=sanpham&ma_loaisp=" . $ma_loaisp;
                        echo '
                            <li><a class="dropdown-item" href="' . $link . '">' . $ten_loaisp . '</a></li>
                        ';
                    }
                    ?>

                </ul>
            </div>
            <div class="item">
                <a href="index.php?act=tintuc">Tin tức </a>
            </div>
            <div class="item">
                <a href="index.php?act=lienhe">Liên hệ </a>
            </div>
            <div class="item">
                <form action="index.php?act=sanpham" method="post">
                    <input type="search" placeholder="Sản phẩm..." name="kyw" required="">
                    <input type="submit" value="Tìm kiếm" name="timkiem">
                </form>

            </div>
        </div>

        <div id="actions" class="list-style">
            <?php
            
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                $tai_khoan = loadone_tai_khoan($ma_tk);
                if (is_array($tai_khoan)) {
                    extract($tai_khoan);
                } ?>
                <span class="<?= $ho_ten ?>"></span>
                <div class="dropdown">
                    <div class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"
                        style="">
                        <img src="../../../duan_1/view/image/th (1).jpg" alt="" width="30" class="user">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="index.php?act=gdnd">
                            <li><button class="dropdown-item" type="button">Sửa đổi thông tin</button></li>
                        </a>
                        <?php if ($vai_tro == 1) { ?>
                            <a href="./../duan_1/admin">
                                <li><button class="dropdown-item" type="button">Quản trị web</button></li>
                            </a>
                        <?php } ?>
                        <a href="index.php?act=dangxuat">
                            <li><button class="dropdown-item" type="button">Đăng xuất</button></li>
                        </a>
                    </ul>
                </div>



            <?php } else { ?>
                <div class="item">
                    <a href="index.php?act=dangnhap"><img src="../../../duan_1/view/image/th (1).jpg" alt="" width="30"></a>
                </div>
            <?php } ?>
            <div class="item">
                <a href="index.php?act=giohang"><img src="../../../duan_1/view/image/cart.png" alt="" width="30"></a>
            </div>
        </div>
    </div>