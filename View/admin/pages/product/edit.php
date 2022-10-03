<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DOUBLE H</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="hover"
                        style="width:40px;height:40px">
                    </lord-icon>
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Nguyễn Văn A</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Trang tổng
                    quát</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                            class="fa fa-tshirt me-2"></i>Sản phẩm</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="?controller=showProduct" class="dropdown-item active">Danh sách sản phẩm</a>
                        <a href="?controller=addCategory" class="dropdown-item">Quản lý danh mục</a>
                    </div>
                </div>
                <a href="order.html" class="nav-item nav-link"><i class="fa fa-cart-arrow-down me-2"></i>Đơn hàng</a>
                <a href="chart.html" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Trang bán hàng</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control border-0" type="search" placeholder="Tìm kiếm">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="me-lg-2">
                            <lord-icon src="https://cdn.lordicon.com/pghzuxlt.json" trigger="hover"
                                style="width:16px;height:16px">
                            </lord-icon>
                        </i>
                        <span class="d-none d-lg-inline-flex">Tin nhắn</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="me-lg-2">
                            <lord-icon src="https://cdn.lordicon.com/kjsfgazx.json" trigger="hover"
                                style="width:16px;height:16px">
                            </lord-icon>
                        </i>
                        <span class="d-none d-lg-inline-flex">Thông báo</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="me-lg-2">
                            <lord-icon src="https://cdn.lordicon.com/elkhjhci.json" trigger="hover"
                                style="width:16px;height:16px">
                            </lord-icon>
                        </i>
                        <span class="d-none d-lg-inline-flex">Nguyễn Văn A</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">Thông tin cá nhân</a>
                        <a href="#" class="dropdown-item">Cài đặt</a>
                        <a href="#" class="dropdown-item text-danger">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Sửa thông tin sản phẩm</h6>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <!-- nhập tên sản phẩm -->
                    <div class="form-check">
                        <input onclick="editName()" class="form-check-input" type="checkbox" value="" id="nameCheck">
                        <label class="form-check-label" for="nameCheck">
                            Chỉnh sửa
                        </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nameEdit" name="product_name"
                            value="<?= $product['product_name'] ?>" placeholder="" readonly>
                        <label for="nameEdit">Tên sản phẩm</label>
                    </div>
                    <!-- nhập giới tính -->
                    <div class="form-check">
                        <input onclick="editSex()" class="form-check-input" type="checkbox" value="" id="sexCheck">
                        <label class="form-check-label" for="sexCheck">
                            Chỉnh sửa
                        </label>
                    </div>
                    <div class="form-floating mb-3">
                        <?php $chooseSex = array("Unisex", "Nam", "Nữ")?>
                        <select class="form-select" name="sex" id="sexSelect" aria-label="Floating label select example"
                            disabled>
                            <option selected value="<?= $product['sex'] ?>"><?= $product['sex'] ?></option>
                            <?php foreach($chooseSex as $choose){
                            if (strcmp($choose,$product['sex'])==0) { continue;}?>
                            <option value="<?= $choose ?>"><?= $choose ?></option>
                            <?php }?>
                        </select>
                        <label for="sexSelect">Chọn giới tính</label>
                    </div>
                    <!-- nhập giá -->
                    <div class="form-check">
                        <input onclick="editPrice()" class="form-check-input" type="checkbox" value="" id="priceCheck"
                            readonly>
                        <label class="form-check-label" for="priceCheck">
                            Chỉnh sửa
                        </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="price" value="<?= $product['price'] ?>"
                            id="priceEdit" placeholder="" readonly>
                        <label for="priceEdit">Giá sản phẩm</label>
                    </div>
                    <!-- nhập tên danh mục -->
                    <div class="form-check">
                        <input onclick="editCate()" class="form-check-input" type="checkbox" value="" id="cateCheck">
                        <label class="form-check-label" for="cateCheck">
                            Chỉnh sửa
                        </label>
                    </div>
                    <?php $productCate = $categoryModel->getCategory($product['category_id'])?>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" id="cateSelect" disabled>

                            <option selected value="<?= $product['category_id'] ?>"><?= $productCate['category_name'] ?>
                            </option>

                            <?php
                            foreach ($categories as $category) {
                                if ($category['category_id'] == $product['category_id']) { continue;}?>

                            <option value="<?= $category['category_id'] ?>"> <?= $category['category_name'] ?></option>
                            <?php }?>
                        </select>
                        <label for="categorySelect">Chọn danh mục sản phẩm</label>
                    </div>
                    <button type="submit" name="editProduct" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>