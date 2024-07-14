<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="../../duan_1/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">
                        <img src="../../../duan_1/view//image/logo.png" alt="logo">
                    </span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php?act=home" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?act=loaitin" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Loại
                                tin</span> </a>
                    </li>
                    <li>
                        <a href="index.php?act=tin" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Tin</span></a>
                    </li>
                    <li>
                        <a href="index.php?act=loaisanpham" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Loại ẩm
                                thực</span></a>
                    </li>
                    <li>
                        <a href="index.php?act=sanpham" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Ẩm
                                thực</span></a>
                    </li>
                    <li>
                        <a href="index.php?act=donhang" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Đơn hàng</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?act=chitietdonhang" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Chi tiết đơn
                                hàng</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?act=taikhoan" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Tài khoản</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Thống kê</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="index.php?act=tk_binhluan" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Bình luận</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?act=tk_loaisanpham" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Loại món
                                        ăn</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <?php if (isset($_SESSION['user']))
                        extract($_SESSION['user']);
                    $hinh = "../../../duan_1/admin/uploads/" . $hinh; { ?>
                        <a href="" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= $hinh ?>" alt="" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">
                                <?= $ho_ten ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li> -->
                            <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>