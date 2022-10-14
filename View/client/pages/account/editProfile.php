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
        </div>


        <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
            <h1>Thông tin cá nhân</h1>
            <form method="POST" id="formEditProfile">
                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-control-editProfile">
                            <label for="userName" class="form-label">Tên đầy đủ</label>
                            <input type="text" name="name" id="fullnameEditProfile" class="form-control" value="<?= $_SESSION['user']['fullname'] ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>

                        <div class="mb-3 form-control-editProfile">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="emailEditProfile" class="form-control" value="<?= $_SESSION['user']['email'] ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 form-control-editProfile">
                            <label for="phone" class="form-label">Điện thoại</label>
                            <input type="text" name="phone" id="phoneEditProfile" class="form-control" value="<?= $_SESSION['user']['phone'] ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>

                        <div class="mb-3 form-control-editProfile">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="addressEditprofile" class="form-control" value="<?= $_SESSION['user']['address'] ?>">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                </div>
                <div class="update-info">
                    <button class="btn btn-primary" name="sbm" type="submit">Cập nhật thông tin cá nhân </button>
                </div>
            </form>
        </div>

    </div>
</div>