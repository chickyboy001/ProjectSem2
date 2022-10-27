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
</div>

<div class="col-12">
    <main class="row">
        <!-- Slider -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 4"></button>
            </div> -->

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <section id="hero">
                        <h4>Trade-in-offer</h4>
                        <h2>Super Value Deals</h2>
                        <h1>On All Products</h1>
                        <p>Save more with coupons & upto 70% off!</p>
                        <button>Show Now</button>
                    </section>
                </div>
                <div class="carousel-item">
                    <!-- <img src="/assests/image/banner2.png" class="slider-img"> -->
                    <section id="hero">
                        <h4>Trade-in-offer</h4>
                        <h2>Super Value Deals</h2>
                        <h1>On All Products</h1>
                        <p>Save more with coupons & upto 70% off!</p>
                        <button>Show Now</button>
                    </section>
                </div>
                <div class="carousel-item">
                    <!-- <img src="/assests/image/banner3.png" class="slider-img"> -->
                    <section id="hero">
                        <h4>Trade-in-offer</h4>
                        <h2>Super Value Deals</h2>
                        <h1>On All Products</h1>
                        <p>Save more with coupons & upto 70% off!</p>
                        <button>Show Now</button>
                    </section>
                </div>
                <div class="carousel-item">
                    <!-- <img src="/assests/image/banner4.png" class="slider-img"> -->
                    <section id="hero">
                        <h4>Trade-in-offer</h4>
                        <h2>Super Value Deals</h2>
                        <h1>On All Products</h1>
                        <p>Save more with coupons & upto 70% off!</p>
                        <button>Show Now</button>
                    </section>
                </div>
                <div class="carousel-item">
                    <!-- <img src="/assests/image/banner5.png" class="slider-img"> -->
                    <section id="hero">
                        <h4>Trade-in-offer</h4>
                        <h2>Super Value Deals</h2>
                        <h1>On All Products</h1>
                        <p>Save more with coupons & upto 70% off!</p>
                        <button>Show Now</button>
                    </section>
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
        <!-- Slider -->

        <!-- Sản phẩm mới -->
        <div class="col-12">
            <div class="row">
                <div class="col-12 py-3">
                    <div class="row">
                        <div class="col-12 text-center text-uppercase">
                            <h2>sản phẩm mới</h2>
                        </div>
                    </div>

                    <div class="row">
                            <?php
                            foreach ($products as $product) {
                                if ($product['status'] == 0) {
                                    continue;
                                }
                                $colors = $productModel->getColorOfProduct($product['product_id']);
                                $image = NULL;
                                $count = 0;
                                $totalQuantity = 0;
                                foreach ($colors as $color) {
                                    if ($count == 0) {
                                        $image = $color['image_link'];
                                    }
                                    $sizes = $colorModel->getSizeOfColor($color['color_id']);
                                    foreach ($sizes as $size) {
                                        $totalQuantity = $totalQuantity + $size['quantity'];
                                    }
                                    $count++;
                                }
                            ?>
                                <!-- Product -->
                                <div class="col-lg-2 col-md-3 col-sm-6 col-6 my-3">
                                    <div class="col-12 bg-white text-center h-100">
                                        <div class="col-md-12 col-sm-12 mb-4">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="?controller=productPage&productId=<?= $product['product_id'] ?>" class="image">
                                                        <img class="pic-1" src="<?= link ?>Public/admin/upload/products/<?= $image ?>">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h3 class="title"><a href="#"><?= $product['product_name'] ?></a></h3>
                                                    <div class="price"><?= getFormattedNumber($product['price']).VND ?></div>
                                                    <div class="text-muted text-center">Còn <?= $totalQuantity ?> sản phẩm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                </div>
            </div>

        </div>
        <!-- Sản phẩm mới -->

        <section id="banner" class="section-m1">
            <h4>Dịch vụ bảo hành</h4>
            <h2>Đổi trả miễn phí trong vòng <span> 3 </span>ngày nếu có không vừa ý</h2>
        </section>


        <!-- Sản phẩm hot -->
        <div class="col-12">
            <div class="row">
                <div class="col-12 py-3">
                    <div class="row">
                        <div class="col-12 text-center text-uppercase">
                            <h2>sản phẩm hot</h2>
                        </div>
                    </div>

                    <div class="row">
                            <?php
                            foreach ($products2 as $product) {
                                if ($product['status'] == 0) {
                                    continue;
                                }
                                $colors = $productModel->getColorOfProduct($product['product_id']);
                                $image = NULL;
                                $count = 0;
                                $totalQuantity = 0;
                                foreach ($colors as $color) {
                                    if ($count == 0) {
                                        $image = $color['image_link'];
                                    }
                                    $sizes = $colorModel->getSizeOfColor($color['color_id']);
                                    foreach ($sizes as $size) {
                                        $totalQuantity = $totalQuantity + $size['quantity'];
                                    }
                                    $count++;
                                }
                            ?>
                                <!-- Product -->
                                <div class="col-lg-2 col-md-3 col-sm-6 col-6 my-3">
                                    <div class="col-12 bg-white text-center h-100">
                                        <div class="col-md-12 col-sm-12 mb-4">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <a href="?controller=productPage&productId=<?= $product['product_id'] ?>" class="image">
                                                        <img class="pic-1" src="<?= link ?>Public/admin/upload/products/<?= $image ?>">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h3 class="title"><a href="#"><?= $product['product_name'] ?></a></h3>
                                                    <div class="price"><?= getFormattedNumber($product['price']).VND ?></div>
                                                    <div class="text-muted text-center">Còn <?= $totalQuantity ?> sản phẩm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                </div>
            </div>

        </div>
        <!-- Sản phẩm hot -->

        

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