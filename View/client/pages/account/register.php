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
<div class="col-12">
    <!-- Main Content -->
    <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>Đăng ký</h2>
        </div>
    </div>

    
    <?php echo $msg;?>
    <main class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <form method="POST" name="registration" id="form">
                        <div class="mb-3 form-control1">
                            <label for="name" class="form-label">Tên đăng nhập</label>
                            <input type="text" name="username" id="username" class="form-control">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="mb-3 form-control1">
                            <label for="name" class="form-label">Tên đầy đủ</label>
                            <input type="text" name="fullname" id="fullname" class="form-control"> <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="mb-3 form-control1">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"> <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="mb-3 form-control1">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="mb-3 form-control1">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="mb-3 form-control1">
                            <label for="password-confirm" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" name="password" id="password2" class="form-control">
                            <span toggle="#password2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <!-- <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="agree" class="form-check-input">
                                <label for="agree" class="form-check-label ml-2">Tôi đồng ý với <a href="">điều
                                        khoản</a></label>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <button type="submit" name="register" class="btn btn-outline-dark">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!-- Main Content -->
</div>