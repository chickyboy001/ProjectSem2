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
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
            <ul class="myinfo">
                <li class="iteminfo">
                    <a href="?controller=profile">
                        Tài khoản của tôi
                    </a>
                </li>
                <li class="iteminfo">
                    <a href="?controller=editProfile">
                        Thông tin cá nhân
                    </a>
                </li>
                <li class="iteminfo">
                    <a href="?controller=orderHistory">
                        <b> Lịch sử đơn hàng </b>
                    </a>
                </li>
                <li class="iteminfo">
                    <a href="?controller=logOut">
                        Đăng xuất
                    </a>
                </li>
            </ul>
            <!-- <div class="menuPv">
                            <div class="userList">
                                <a href="/profile"><b>Tài khoản của tôi</b></a>
                                <a href="/profile/edit">Thông tin cá nhân</a>
                                <a href="/order">Lịch sử đơn hàng</a>
                                <a href="/user/signout">Đăng xuất</a>
                            </div>
                        </div> -->
        </div>
        <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
            <h1><b> Đơn hàng của tôi </b></h1>
            <section class="mb-5">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h5 class="text-muted mb-0">Cảm ơn đơn hàng của bạn, <span style="color: green;"><?= $_SESSION['user']['username'] ?></span>!</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0" style="color: green;">Hóa đơn</p>
                            <p class="small text-muted mb-0">Mã giảm giá: 1KAU9-84UIL</p>
                        </div>
                        <div class="card shadow-0 border mb-4">
                            <div class="card-body">
                                <?php
                                $stt = 1;
                                $price = 0;
                                foreach ($products as $product) {
                                    $price = $price + $product['price']*$product['quantity']; 
                                    ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://product.hstatic.net/1000383583/product/1_1__1__74f1d224bc754a1997eff2509916971f_master.jpg" class="img-fluid" style="width: 1000px;" alt="Áo">
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0"><?= $product['product_name'] ?></p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small"><?= $product['color'] ?></p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small"><?= $product['size'] ?></p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">Số lượng: <?= $product['quantity'] ?></p>
                                        </div>
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small"><?= getFormattedNumber($product['price']).VND ?></p>
                                        </div>
                                    </div>
                                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                <?php 
                                $stt++; } ?>
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                        <p class="text-muted mb-0 small">Theo dõi đơn hàng</p>
                                    </div>
                                    <div class="col-md-10">
                                        <ul id="progressbar" class="text-center">
                                            <li class="active step0 ">
                                                Đã đặt hàng
                                            </li>
                                            <li class="active step0">
                                                Đang xử lý
                                            </li>
                                            <li class="active step0">
                                                Đang vận chuyển
                                            </li>
                                            <li class="step0">Hoàn thành</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                            <p class="fw-bold mb-0">Chi tiết đơn hàng</p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Tổng</span>
                            <?= getFormattedNumber($price).VND ?>
                            </p>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <p class="text-muted mb-0">Hóa đơn số: <?= $order['order_id']?></p>
                            <p class="text-muted mb-0"><span class="fw-bold me-4">Giảm giá</span>
                                0đ
                            </p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0">Thời gian đặt hàng : <?= $order['order_date']?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted mb-0">Phương thức thanh toán : <b>Thanh toán khi nhận hàng</b> </p>
                        </div>
                    </div>
                    <div class="card-footer border-0 px-4 py-5" style="background-color: green; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-white mb-0">
                            TỔNG TIỀN: <span class="h2 mb-0 ms-2"><?= getFormattedNumber($price).VND ?></span></h5>

                    </div>
                </div>
            </section>
            <!-- <div class="left">
                            <button class="">Mua Lại</button>
                            <button class="">Xem đánh giá shop</button>
                        </div> -->
        </div>
    </div>
</div>