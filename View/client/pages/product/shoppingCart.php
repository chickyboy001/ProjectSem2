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
6utfygubjnlk
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
    <!-- Main Content -->
    <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>giỏ hàng</h2>
        </div>
    </div>

    <main class="row">
        <div class="col-12 bg-white py-3 mb-3">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto table-responsive">
                    <form class="row">
                        <div class="col-12">
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <th>Size</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($_SESSION['shoppingCart'] as $shoppingCart) { ?>
                                        <tr id="content">
                                            <td>
                                                <img src="../../../ProjectSem2/Public/admin/upload/products/ezgif-5-9b70b8b517.jpg" class="img-fluid">
                                                <?= $shoppingCart['product_name'] . ' ' . $shoppingCart['color_name'] ?>
                                            </td>
                                            <td>
                                                <form>
                                                    <select>
                                                        <option selected value="<?= $shoppingCart['size_id'] ?>"><?= $shoppingCart['size_name'] ?></option>
                                                        <?php
                                                        
                                                        $sizes = $colorModel->getSizeOfColor($shoppingCart['color_id']);
                                                        
                                                        foreach ($sizes as $size) {
                                                            if ($size['size_name'] == $shoppingCart['size_name']) {
                                                                continue;
                                                            }
                                                        ?>
                                                            <option value="<?= $size['size_id']?>"><?= $size['size_name'] ?></option>
                                                        <?php 
                                                        
                                                    } ?>
                                                    </select>
                                                    <!-- <br><br>
                                                <input type="submit" value="Submit"> -->
                                                </form>
                                            </td>
                                            <td>
                                                <div class="buttons_added">
                                                    <input class="minus is-form" type="button" value="-">
                                                    <input aria-label="quantity" class="input-qty changQuantity" max="100" min="1" name="" type="number" value="<?= $shoppingCart['quantity'] ?>">
                                                    <input class="plus is-form" type="button" value="+">
                                                </div>
                                            </td>
                                            <td class="unit_price">
                                                <?= getFormattedNumber($shoppingCart['unit_price']) . VND ?>
                                            </td>
                                            <td id="btn1" style="cursor: pointer;">
                                                <form method="POST">
                                                    <input type="hidden" name="index" value="<?= $count ?>" />
                                                    <button class="btn btn-link text-danger" type="submit" name="deleteProducInCart">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php $count++;
                                    } ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-right">Tổng cộng</th>
                                        <th class="total_price">650,000đ</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-12 text-right">
                            <a href="?controller=checkOut" class="btn btn-outline-success">Thanh toán</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!-- Main Content -->
</div>