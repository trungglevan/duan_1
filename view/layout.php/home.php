    <div id="banner">
        <div class="box-left">
            <h2>
                <span>THỨC ĂN </span>
                <br>
                <span>THƯỢNG HẠNG</span>
            </h2>
            <p>
                Chuyên cung cấp về các món ăn đảm bảo dinh dưỡng
                hợp vệ sinh đến người dùng , phục vụ người dùng 1 cách hoàn
                hảo nhất.
            </p>
            <button>Mua ngay </button>
        </div>
        <div class="box-right">
            <a href="index.php?act=sanphamct"><img src="../../../duan_1/view/image/71.png" alt="" width="100"></a>
            <img src="../../../duan_1/view/image/69.jpg" alt="" width="100">
            <img src="../../../duan_1/view/image/71.png" alt="" width="100">
        </div>
        <div class="to-bottom">
            <a href="">
                <img src="../../../duan_1/view/image/23.webp" alt="" width="30">
            </a>
        </div>
    </div>
    <div id="wp-products">
        <h2>MÓN ĂN CỦA CHÚNG TÔI </h2>
        <ul id="list-products">
                <?php 
                    foreach ($list_top as $sptop) {
                        extract($sptop);
                        $linksp="index.php?act=sanphamct&ma_sp=".$ma_sp;
                        $hinh = "../../../duan_1/admin/uploads/".$hinh;
                        echo'
                            <div class="item">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" height="200" width="250"></a>
                                <div class="name">'.$ten_sp.'</div>
                                <div class="desc">'.substr($mo_ta, 0, 93).'...</div>
                                <div class="price">'.number_format($don_gia, 0, ",", ".").'VNĐ</div>
                            </div>
                        ';
                    }
                ?>
        </ul>
        <div class="list-page">
            <div class="item">
                <a href="">1</a>
            </div>
            <div class="item">
                <a href="">2</a>
            </div>
            <div class="item">
                <a href="">3</a>
            </div>
            <div class="item">
                <a href="">4</a>
            </div>
        </div>
    </div>
    <div id="saleoff">
        <div class="box-left">
            <h1>
                <span>GIẢM GIÁ LÊN DẾN </span>
                <SPan>45%</SPan>
            </h1>
        </div>
        <div class="box-right"></div>
    </div>

    <div id="comment">
        <h2>Thành viên</h2>
        <div id="comment-body">
            <div class="prev">
                <a href="#">
                    <img src="../../../duan_1/view/image/54.jpg" alt="" height="100">
                </a>
            </div>
            <ul id="list-comment">
                <li class="item">
                    <div class="avatar">
                        <img src="../../../duan_1/view/image/55.jpg" alt="" height="100">

                    </div>
                    <!-- <div class="stars">
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                    </div> -->
                    <div class="name">Lê Văn Trung</div>

                    <div class="text">
                        <p>

                        </p>
                </li>
                <li class="item">
                    <div class="avatar">
                        <img src="../../../duan_1/view/image/56.jpg" alt="" height="100">

                    </div>
                    <!-- <div class="stars">
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                    </div> -->
                    <div class="name">Nguyễn Văn Lộc</div>

                    <div class="text">
                        <p>

                        </p>
                </li>
                <li class="item">
                    <div class="avatar">
                        <img src="../../../duan_1/view/image/57.jpg" alt="" height="100">

                    </div>
                    <!-- <div class="stars">
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                        <span>
                            <img src="../../../duan_1/view/image/70.png" alt="" width="30">
                        </span>
                    </div> -->
                    <div class="name">Nguyễn Duy Nguyên </div>

                    <div class="text">
                        <p>

                        </p>
                    </div>
                </li>
            </ul>
            <div class="next">
                <a href="#">
                    <img src="../../../duan_1/view/image/66.jpg" alt="" height="100">
                </a>
            </div>
        </div>
    </div>
