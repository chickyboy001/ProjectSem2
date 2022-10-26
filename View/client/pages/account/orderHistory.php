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
                            <a class="dropdown-item" href="?controller=listProduct&category=<?=$category['category_id']?>">
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
            <div class="table-responsive pb-5">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="font-weight-bold py-2 border-0">ID</th>
                            <th class="font-weight-bold py-2 border-0 quantity">Ngày đặt hàng</th>
                            <th class="font-weight-bold py-2 border-0 ">Tên sản phẩm</th>
                            <th class="font-weight-bold py-2 border-0 ">Màu</th>
                            <th class="font-weight-bold py-2 border-0 ">Size</th>
                            <th class="font-weight-bold py-2 border-0 ">Số lượng</th>
                            <th class="font-weight-bold py-2 border-0 ">Tổng tiền</th>
                            <th class="font-weight-bold py-2 border-0 ">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        foreach ($orders as $order) {
                            $products = $orderModel->getProductInOrder($order['order_id']);
                        ?>
                            <tr>
                                <?php foreach ($products as $product) { ?>
                                    <td><?= $stt ?></td>
                                    <td><?= $order['order_date'] ?></td>
                                    <td><?= $product['product_name'] ?></td>
                                    <td><?= $product['color'] ?></td>
                                    <td><?= $product['size'] ?></td>
                                    <td><?= $product['quantity'] ?></td>
                                    <td><?= getFormattedNumber($product['quantity'] * $product['price']) . VND ?></td>
                                    <td>
                                        <?php if ($order['status'] == 1) { ?>
                                            <a href="?controller=orderDetail&orderId=<?= $order['order_id'] ?>" style="color:green;" class="js-picture">Đã đặt hàng</a>
                                        <?php }
                                        if ($order['status'] == 2) { ?>
                                            <a href="?controller=orderDetail&orderId=<?= $order['order_id'] ?>" style="color:green;" class="js-picture">Đang xử lý</a>
                                        <?php }
                                        if ($order['status'] == 3) { ?>
                                            <a href="?controller=orderDetail&orderId=<?= $order['order_id'] ?>" style="color:green;" class="js-picture">Đang vận chuyển</a>
                                        <?php }
                                        if ($order['status'] == 4) { ?>
                                            <a href="?controller=orderDetail&orderId=<?= $order['order_id'] ?>" style="color:green;" class="js-picture">Hoàn thành</a>
                                        <?php }
                                        if ($order['status'] == 5) { ?>
                                            <a href="?controller=orderDetail&orderId=<?= $order['order_id'] ?>" style="color:red;" class="js-picture">Đã hủy</a>
                                        <?php } ?>
                                    </td>
                                <?php
                                    break;
                                }
                                ?>
                            </tr>
                        <?php
                            $stt++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>