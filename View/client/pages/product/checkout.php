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
                            <a class="dropdown-item" href="?controller=listProduct&category=<?= $category['category_id'] ?>">
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
<?php if (empty($_SESSION['shoppingCart'])) { ?>
    <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>bạn chưa chọn sản phẩm nào</h2>
            <a class="d-flex justify-content-center" href="?controler=home.php" type="button">Quay lại trang chủ</a>
        </div>
    </div>
<?php } else { ?>
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
                        <?php
                        $count = 0;
                        $total_price = 0;
                        foreach ($_SESSION['shoppingCart'] as $shoppingCart) { ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?= $shoppingCart['product_name'] . ' ' . $shoppingCart['color_name'] ?></h6>
                                    <small class="text-muted">Số lượng: <?= $shoppingCart['quantity'] ?></small>
                                    <small class="text-muted">Size: <?= $shoppingCart['size_name'] ?></small>
                                </div>
                                <span class="text-muted"><?= getFormattedNumber($shoppingCart['quantity'] * $shoppingCart['unit_price']) . VND ?></span>
                            </li>
                        <?php
                            $total_price = $total_price + ($shoppingCart['quantity'] * $shoppingCart['unit_price']);
                            $count++;
                        } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Tổng thành tiền</span>
                            <strong><?= getFormattedNumber($total_price) . VND ?></strong>
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
                            <input type="hidden" name="total_price" value="<?= $total_price ?>">
                            <?php if (!empty($_SESSION['user'])) { ?>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" class="form-control" name="fullname" id="fullnameCheckout" placeholder="Họ và tên người nhận" value="<?= $_SESSION['user']['fullname'] ?>" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" id="addressCheckout" placeholder="Vui lòng ghi rõ địa chỉ nhà, tên đường(nếu có), xã(phường), huyện(quận), tỉnh (TP)" value="<?= $_SESSION['user']['address'] ?>" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="kh_dienthoai">Điện thoại</label>
                                    <input type="text" class="form-control" name="phone" id="phoneCheckout" placeholder="Số điện thoại người nhận" value="<?= $_SESSION['user']['phone'] ?>" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="kh_dienthoai">Email</label>
                                    <input type="text" class="form-control" name="email" id="phoneCheckout" placeholder="Email người nhận" value="<?php if (isset($_SESSION['user']['email'])) {
                                                                                                                                                        echo $_SESSION['user']['email'];
                                                                                                                                                    } ?>" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" class="form-control" name="fullname" id="fullnameCheckout">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" id="addressCheckout">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="col-md-12 my-1 form-control-checkout">
                                    <label for="kh_dienthoai">Điện thoại</label>
                                    <input type="text" class="form-control" name="phone" id="phoneCheckout">
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                            <?php } ?>
                            <h4 class="my-3">Hình thức thanh toán</h4>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="payment_method" type="radio" class="custom-control-input" value="0" checked>
                                    <label class="custom-control-label" for="httt-1">Ship COD</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="payment_method" type="radio" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="payment_method" type="radio" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="httt-3">Thẻ ATM</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <!-- class="btn btn-outline-dark" -->
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="confirmOrder" style="margin-bottom:18px">Đặt hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
        <!-- End block content -->
    </main>
<?php } ?>