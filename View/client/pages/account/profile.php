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
        </div>
        <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
            <h1><b> Tài khoản của tôi </b></h1>
            <div class="userindex">
                <!-- <div class="textUser"> -->
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 userlist">
                    <h3><?= $_SESSION['user']['username'] ?></h3>
                    <span><?= $_SESSION['user']['email'] ?></span>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 userlist">
                    <h3>Điện thoại</h3>
                    <span><?= $_SESSION['user']['phone'] ?></span>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 userlist">
                    <h3>Điểm tích lũy</h3>
                    <span>1</span>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 userlist">
                    <h3>Đã chi tiêu</h3>
                    <span>500,000đ</span>
                </div>
                <!-- </div> -->
            </div>
            <div class="">
                <h4 class="moreinfo-item">
                    <b>
                        Thông tin cá nhân
                    </b>
                </h4>
                <h4 class="moreinfo">
                    <b>
                        Lịch sử đơn hàng
                    </b>
                </h4>
            </div>
        </div>
    </div>
</div>