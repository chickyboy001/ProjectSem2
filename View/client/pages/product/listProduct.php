<!-- Nav -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
        <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="?controller=home">Trang chủ <span class="sr-only">(current)</span>
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
<?php if(empty($products)){?>
        <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>KHông tìm thấy sản phẩm nào trùng khớp</h2>
            <a class="d-flex justify-content-center" href="?controler=home.php" type="button">Quay lại trang chủ</a>
        </div>
    </div>
    <?php } else {?>
    <main class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 py-3">
                    <div class="row">
                        <div class="col-12 text-center text-uppercase">
                            <?php if(isset($categoryif['category_name'])){?>
                            <h2><?= $categoryif['category_name'] ?></h2>
                            <?php } else {?>
                            <h2>Danh sách sản phẩm</h2>
                            <?php }?>
                        </div>
                    </div>

                    <!-- On MObile -->
                    <div id="mobile-filter">
                        <div class="border-bottom pb-2 ml-2">
                            <h4 id="burgundy">Filters</h4>
                        </div>
                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">Categories</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="artisan">
                                    <label for="artisan">Fresh Artisan Breads</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="breakfast">
                                    <label for="breakfast">Breakfast Breads</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="healthy">
                                    <label for="healthy">Healthy Breads</label>
                                </div>
                            </form>
                        </div>
                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">Accompainments</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="tea">
                                    <label for="tea">Tea Cakes</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="cookies">
                                    <label for="cookies">Cookies</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="pastries">
                                    <label for="pastries">Pastries</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="dough">
                                    <label for="dough">Cookie Dough</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="choco">
                                    <label for="choco">Chocolates</label>
                                </div>
                            </form>
                        </div>
                        <div class="py-2 ml-3">
                            <h6 class="font-weight-bold">Top Offers</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="25off">
                                    <label for="25">25% off</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="5off">
                                    <label for="5off" id="off">5% off on artisan breads</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- On MObile -->

                    <!-- Sidebar filter section -->
                    <section id="sidebar">
                        <div class="border-bottom pb-2 ml-2">
                            <h4 id="burgundy">Bộ lọc</h4>
                        </div>
                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">Danh mục</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="artisan">
                                    <label for="artisan">Áo khoác</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="breakfast">
                                    <label for="breakfast">Áo phông nam</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="healthy">
                                    <label for="healthy">Áo phông nữ</label>
                                </div>
                            </form>
                        </div>
                        <div class="py-2 border-bottom ml-3">
                            <h6 class="font-weight-bold">Quần</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="tea">
                                    <label for="tea">Quần dài</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="cookies">
                                    <label for="cookies">Quần short</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="pastries">
                                    <label for="pastries">Quần âu</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="dough">
                                    <label for="dough">Quần ngố</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="choco">
                                    <label for="choco">Quần đi bơi</label>
                                </div>
                            </form>
                        </div>
                        <div class="py-2 ml-3">
                            <h6 class="font-weight-bold">Áo</h6>
                            <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group">
                                    <input type="checkbox" id="">
                                    <label for="">Áo Phông</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="">
                                    <label for="" id="off">Áo khoác</label>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- products section -->
                    <section id="products">
                        <div class="container">
                            <div class="d-flex flex-row">
                                <div class="ml-auto mr-lg-4 float-end">
                                    <div id="sorting" class="border rounded p-1 m-1">
                                        <select name="sort" id="sort">
                                            <option name="" value="popularity"><b>Tùy chọn</b></option>
                                            <!-- <form method="post"> -->
                                            <!-- <button name="enter"> -->
                                            <option value="prcie"><b>Giá giảm dần</b></option>
                                            <!-- </button> -->
                                            <!-- </form> -->
                                            <option value="prcie"><b>Giá tăng dần</b></option>
                                            
                                        </select>
                                    </div>
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
                                    $count=0;
                                    $totalQuantity = 0;
                                    foreach ($colors as $color) {
                                        if($count==0){
                                            $image = $color['image_link'];
                                        }
                                        $sizes = $colorModel->getSizeOfColor($color['color_id']);
                                        foreach($sizes as $size) {
                                            $totalQuantity = $totalQuantity + $size['quantity'];
                                        }
                                        $count++;
                                    }
                                ?>
                                        <div class="col-lg-4 col-md-5 col-sm-10 offset-md-0 offset-sm-1">
                                            <div class="card1">
                                                <a href="?controller=productPage&productId=<?= $product['product_id'] ?>" class="image">
                                                    <img class="card-img-top"  src="<?= link ?>Public/admin/upload/products/<?= $image ?>">
                                                </a>
                                                <div class="card-body1">
                                                    <h5 class="text-center"><b><?= $product['product_name'] ?></b> </h5>
                                                    <!-- <div class="d-flex flex-row my-2"> -->
                                                    <div class="text-muted text-center"> <b><?= $product['price'].VND ?></b></div>
                                                    <div class="text-muted text-center">Còn <?= $totalQuantity ?> sản phẩm</div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
        <!-- Sản phẩm mới -->
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
    <?php }?>
</div>