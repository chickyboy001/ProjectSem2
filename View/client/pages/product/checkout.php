<!-- Nav -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
        <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="">Trang chủ <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="electronics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản
                        Phẩm</a>

                    <div class="dropdown-menu" aria-labelledby="electronics">
                        <?php
                        foreach ($categories as $category) {
                            if ($category['status'] == 0) {
                                continue;
                            }
                        ?>
                            <a class="dropdown-item" href="category.html">
                                <?= $category['category_name'] ?>
                            </a>
                        <?php } ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="fashion" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin
                        Tức</a>
                    <div class="dropdown-menu" aria-labelledby="fashion">

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liên hệ</a>

                    <div class="dropdown-menu" aria-labelledby="books">

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Nav -->
</div>
<!-- Header -->
</header>
</div>
<main role="main">
    <div class="container mt-4">
        <!-- <form method="post" id="form"> -->

            <div class="py-5 text-center">
                <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                <h2>Thanh toán</h2>
                <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt
                    hàng.</p>
            </div>

            <div class="row" id="pb-12">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Giỏ hàng</span>
                        <span class="badge badge-secondary badge-pill">2</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <!-- <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                                    <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                                    <input type="hidden" name="sanphamgiohang[1][soluong]" value="2"> -->

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Vintage Cargo Pants v2 Mocha</h6>
                                <small class="text-muted">L</small>
                            </div>
                            <span class="text-muted">650,000đ</span>
                        </li>
                        <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                        <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                        <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Sweater Steel Blue</h6>
                                <small class="text-muted">XL</small>
                            </div>
                            <span class="text-muted">350,000đ</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Tổng thành tiền</span>
                            <strong>1,000,000đ</strong>
                        </li>
                    </ul>


                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mã giảm giá">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Xác nhận</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Thông tin khách hàng</h4>

                    <div class="row">
                        <form method="POST" id="formCheckout">
                            <div class="col-md-12 my-1 form-control-checkout">
                                <label for="fullname">Họ tên</label>
                                <input type="text" class="form-control" id="fullnameCheckout" value="<?= $_SESSION['user']['fullname'] ?>">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <div class="col-md-12" style="display: flex; padding:10px">
                                <label for="kh_gioitinh" style="padding-right:10px">Giới tính</label>
                                <span class="me-1">Nam</span><input type="checkbox" class="form-check">
                                &nbsp
                                <span class="me-1">Nữ</span><input type="checkbox" class="form-check">
                                &nbsp
                                <span class="me-1">Khác</span><input type="checkbox" class="form-check">
                            </div>
                            <div class="col-md-12 my-1 form-control-checkout">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" id="addressCheckout"
                                    value="<?= $_SESSION['user']['address'] ?>">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <div class="col-md-12 my-1 form-control-checkout">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" id="phoneCheckout"
                                    value="<?= $_SESSION['user']['phone'] ?>">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <h4 class="my-3">Hình thức thanh toán</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input"
                                        value="1">
                                    <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input"
                                        value="2">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input"
                                        value="3">
                                    <label class="custom-control-label" for="httt-3">Ship COD</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <!-- class="btn btn-outline-dark" -->
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang"
                                    style="margin-bottom:18px">Đặt hàng</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <!-- </form> -->

    </div>
    <!-- End block content -->
</main>