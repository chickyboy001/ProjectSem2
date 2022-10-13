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
                    <a href="/logout.php">
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
            <div class="userindex">
                <h6 class="text-center">
                    Chưa có đơn hàng nào
                </h6>
            </div>
        </div>
    </div>
</div>