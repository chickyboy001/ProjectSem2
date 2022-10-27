<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="?controler=home" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DOUBLE H</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="hover" style="width:40px;height:40px">
                    </lord-icon>
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $_SESSION['useradmin']['fullname'] ?></h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="?controler=home" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Trang tổng
                    quát</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-tshirt me-2"></i>Sản phẩm</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="?controller=showProduct" class="dropdown-item">Danh sách sản phẩm</a>
                        <a href="?controller=addProduct" class="dropdown-item active">Thêm sản phẩm</a>
                    </div>
                </div>
                <a href="?controller=manageCategory" class="nav-item nav-link"><i class="fa-solid fa-rectangle-list me-2"></i>Danh mục</a>
                <a href="?controller=showOrder" class="nav-item nav-link"><i class="fa fa-cart-arrow-down me-2"></i>Đơn hàng</a>

                <a href="../../?controller=home" class="nav-item nav-link"><i class="fa-solid fa-house me-2"></i>Trang bán hàng</a>
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
            
            <div class="navbar-nav align-items-center ms-auto">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="me-lg-2">
                            <lord-icon src="https://cdn.lordicon.com/elkhjhci.json" trigger="hover" style="width:16px;height:16px">
                            </lord-icon>
                        </i>
                        <span class="d-none d-lg-inline-flex"><?= $_SESSION['useradmin']['fullname'] ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">Thông tin cá nhân</a>
                        <a href="#" class="dropdown-item">Cài đặt</a>
                        <a href="?controller=logOut" class="dropdown-item text-danger">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Thêm sản phẩm</h6>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <!-- nhập tên sản phẩm -->
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Tên sản phẩm</label>
                        <input name="product_name" type="text" class="form-control" id="nameInput" pattern=".{8,}" title="Tên sản phẩm không ít hơn 8 ký tự" required>
                    </div>
                    <!-- nhập giới tính -->
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Giới tính</label>
                        <?php $chooseSex = array("Nam", "Nữ", "Unisex");
                        $value = 1; ?>
                        <select name="sex" class="form-select" required>
                            <option value="">None</option>
                            <?php foreach ($chooseSex as $choose) { ?>
                                <option value="<?= $value ?>"><?= $choose ?>
                                </option>
                            <?php $value++;
                            } ?>
                        </select>
                    </div>
                    <!-- nhập giá -->
                    <div class="mb-3">
                        <label for="priceInput" class="form-label">Giá (VNĐ)</label>
                        <input name="price" type="text" class="form-control" pattern=".{6,}" title="Giá không được ít hơn 6 ký tự" id="priceInput" required>
                    </div>
                    <!-- nhập tên danh mục -->
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Danh mục sản phẩm</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">None</option>
                            <?php foreach ($categories as $category) {
                                if ($category['status'] == 0) {
                                    continue;
                                } ?>
                                <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?>
                                </option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <!-- nhập mô tả -->
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Mô tả sản phẩm</label>
                        <textarea name="description" class="form-control" value="" pattern=".{20,}" title="Mô tả không được ít hơn 20 ký tự" required>
                        </textarea>
                    </div>
                    <button onclick="addProduct()" type="submit" name="addProduct" class="btn btn-primary">Thêm sản
                        phẩm</button>
                </form>
            </div>
        </div>