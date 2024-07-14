<div id="wp-products">
    <h2>MÓN ĂN CỦA CHÚNG TÔI</h2>
    <ul id="list-products">
        <?php foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&ma_sp=" . $ma_sp;
            $hinh = "../../../duan_1/admin/uploads/" . $hinh; ?>
            <div class="item">
                <a href="<?= $linksp ?>"><img src="<?= $hinh ?>" alt="" height="200" width="250"></a>
                <div class="name">
                    <?= $ten_sp ?>
                </div>
                <div class="desc">
                    <?= substr($mo_ta, 0, 93) ?>...
                </div>
                <div class="price">
                    <?= number_format($don_gia, 0, ",", ".") ?>VNĐ
                </div>
            </div>
        <?php }
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