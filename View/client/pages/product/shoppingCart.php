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
<?php echo $msg; ?>

<div class="col-12">
    <!-- Main Content -->
    <?php if (empty($_SESSION['shoppingCart'])) { ?>
        <div class="row" style="margin-bottom: 300px;">
            <div class="col-12 mt-3 text-center text-uppercase">
                <h2>không có sản phẩm nào trong giỏ</h2>
                <a class="d-flex justify-content-center" href="?controler=home.php" type="button">Quay lại trang chủ</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-12 mt-3 text-center text-uppercase">
                <h2>giỏ hàng</h2>
            </div>
        </div>
        <main class="row">
            <div class="col-12 bg-white py-3 mb-3">
                <div class="row">
                    <div class="col-lg-8 mx-auto table-responsive table-hover">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Tên sản Phẩm</th>
                                            <th>Size</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 0;
                                        $total_price = 0;
                                        foreach ($_SESSION['shoppingCart'] as $shoppingCart) {
                                            $total_price = $total_price + ($shoppingCart['quantity'] * $shoppingCart['unit_price'])
                                        ?>
                                        <form method="POST">
                                            <input type="hidden" name="index" value="<?= $count ?>" />
                                            <tr id="content">
                                                <td>
                                                    <img src="<?= link ?>Public/admin/upload/products/<?= $shoppingCart['image'] ?>" class="img-fluid">

                                                </td>
                                                <td>

                                                    <?= $shoppingCart['product_name'] . ' ' . $shoppingCart['color_name'] ?>
                                                </td>
                                                <td>
                                                    
                                                        <select name="size_id" style="height: 35px; border-radius: 4px; border-color: #ddd;">
                                                            <option selected value="<?= $shoppingCart['size_id'] ?>"><?= $shoppingCart['size_name'] ?></option>
                                                            <?php
                                                            $sizes = $colorModel->getSizeOfColor($shoppingCart['color_id']);
                                                            foreach ($sizes as $size) {
                                                                if ($size['size_name'] == $shoppingCart['size_name'] || $size['status'] == 0 || $size['quantity'] <=0) {
                                                                    continue;
                                                                }
                                                            ?>
                                                                <option value="<?= $size['size_id'] ?>"><?= $size['size_name'] ?></option>
                                                            <?php
                                                            } ?>
                                                        </select>
                                                    
                                                </td>
                                                <td>
                                                    <div class="buttons_added">
                                                        <input class="minus is-form" type="button" value="-">
                                                        <input aria-label="quantity" class="input-qty changQuantity" name="quantity" max="100" min="1" name="" type="number" value="<?= $shoppingCart['quantity'] ?>">
                                                        <input class="plus is-form" type="button" value="+">
                                                    </div>
                                                </td>
                                                <td class="unit_price">
                                                    <?= getFormattedNumber($shoppingCart['unit_price']).VND ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-success" name="updateCart" type="submit" style="float: right;text-decoration: none; color: green;">
                                                        Cập nhật
                                                    </button>
                                                </td>
                                                </form>
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
                                            <th colspan="4" class="text-right">Tổng cộng</th>
                                            <th class="total_price"><?= getFormattedNumber($total_price).VND ?></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-success" style="float: right;  margin-left:5px">
                                    <a href="?controller=checkOut" style="text-decoration: none; color: green;">Thanh toán</a>
                                </button>
                            </div>
                        
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content -->
    <?php } ?>
</div>