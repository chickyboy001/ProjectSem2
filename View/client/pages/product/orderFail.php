<!-- Nav -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
        <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span>
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
<div class="col-12">
    <main class="row">
        <div class="body-fail">
            <div class="card-fail">
                <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="fa-solid fa-xmark checkmark"></i>
                </div>
                <h1 class="h1-fail">Đặt hàng không thành công</h1>
                <p class="p-fail">Sản phẩm bạn đặt có thể đã hết hàng. Vui lòng thử lại sau</p>
                <!-- <button class="btn btn-dark mt-4" style="background-color: green;"> <a href="" style="text-decoration: none; color: white">Tiếp tục mua sắm</a></button> -->
            </div>
        </div>

        <p class="back-to-top">
            <a class="fa-solid fa-arrow-up back-to-top" href="#"></a>
        </p>

        <div class="col-12 py-3 bg-light d-sm-block d-none">
            <div class="row" style="cursor: pointer;">
                <div class="col-lg-3 col ms-auto large-holder">
                    <div class="row">
                        <div class="col-auto ms-auto large-icon">
                            <i class="fas fa-money-bill"></i>
                        </div>
                        <div class="col-auto me-auto large-text">
                            Giá Tốt Nhất
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col large-holder">
                    <div class="row">
                        <div class="col-auto ms-auto large-icon">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                        <div class="col-auto me-auto large-text">
                            Chuyển Phát Nhanh
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col me-auto large-holder">
                    <div class="row">
                        <div class="col-auto ms-auto large-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="col-auto me-auto large-text">
                            Sản Phẩm Chính Hãng
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>