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
                        <a href="?controller=showProduct" class="dropdown-item active">Danh sách sản phẩm</a>
                        <a href="?controller=addProduct" class="dropdown-item">Thêm sản phẩm</a>
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


        <!-- List Product Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Danh sách sản phẩm</h6>
                </div>
                <div class="table-responsive">
                    <table id="productTable" class="table text-center align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">STT</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá </th>
                                <th scope="col">Xem</th>
                                <th scope="col">Sửa</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 0;
                            foreach ($products as $product) {
                                $stt++;
                                $quantity = 0;
                                $colors = $productModel->getColorOfProduct($product['product_id']);
                                foreach ($colors as $color) {
                                    $sizes = $colorModel->getSizeOfColor($color['color_id']);
                                    foreach ($sizes as $size) {
                                        if ($size['status'] == 0) {
                                            continue;
                                        }
                                        $quantity = $quantity + $size['quantity'];
                                    }
                                }
                                $productCate = $cateModel->getCategory($product['category_id']) ?>
                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?= $product['product_name'] ?></td>
                                    <td><?= $productCate['category_name'] ?></td>
                                    <td><?= $quantity ?></td>
                                    <td><?= getFormattedNumber($product['price']) . VND ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info" href="?controller=productDetail&productId=<?= $product['product_id'] ?>">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#MD<?= $stt ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <div class="modal fade" id="MD<?= $stt ?>" tabindex="-1" aria-labelledby="MD<?= $stt ?>" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="MD<?= $stt ?>">Thay đổi
                                                            thuộc tính sản phẩm</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form id="formPd<?= $stt ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="productId" value="<?= $product['product_id'] ?>" />
                                                            <!-- Sửa tên -->
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="nameEdit" name="product_name" value="<?= $product['product_name'] ?>" required>
                                                                <label for="nameEdit">Tên sản phẩm</label>
                                                            </div>
                                                            <!-- nhập giới tính -->
                                                            <div class="form-floating mb-3">
                                                                <?php $chooseSex = array(
                                                                    array(
                                                                        'value' => 1,
                                                                        'name' => 'Nam'
                                                                    ),
                                                                    array(
                                                                        'value' => 2,
                                                                        'name' => 'Nữ'
                                                                    ),
                                                                    array(
                                                                        'value' => 3,
                                                                        'name' => 'Unisex'
                                                                    ),
                                                                ); ?>
                                                                <select class="form-select" name="sex" id="sexSelect" aria-label="Floating label select example">
                                                                    <?php echo $product['sex'];
                                                                    if ($product['sex'] == 1) { ?>
                                                                        <option selected value="1">Nam</option>
                                                                    <?php }
                                                                    if ($product['sex'] == 2) { ?>
                                                                        <option selected value="2">Nữ</option>
                                                                    <?php }
                                                                    if ($product['sex'] == 3) { ?>
                                                                        <option selected value="3">Unisex</option>
                                                                    <?php }
                                                                    foreach ($chooseSex as $choose) {
                                                                        if ($choose['value'] == $product['sex']) {
                                                                            continue;
                                                                        } ?>
                                                                        <option value="<?= $choose['value'] ?>"><?= $choose['name'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label for="sexSelect">Chọn giới tính</label>
                                                            </div>
                                                            <!-- nhập giá -->
                                                            <div class="form-floating mb-3">
                                                                <input type="number" class="form-control" name="price" value="<?= $product['price'] ?>" id="priceEdit" required>
                                                                <label for="priceEdit">Giá sản phẩm</label>
                                                            </div>
                                                            <!-- nhập tên danh mục -->
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" name="category_id" id="cateSelect">
                                                                    <option selected value="<?= $product['category_id'] ?>">
                                                                        <?= $productCate['category_name'] ?>
                                                                    </option>
                                                                    <?php
                                                                    foreach ($categories as $category) {
                                                                        if ($category['category_id'] == $product['category_id'] && $category['status'] == 0) {
                                                                            continue;
                                                                        } ?>
                                                                        <option value="<?= $category['category_id'] ?>">
                                                                            <?= $category['category_name'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label for="categorySelect">Chọn danh mục sản phẩm</label>
                                                            </div>
                                                            <!-- Nhập mô tả -->
                                                            <div class="form-floating mb-3">
                                                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"><?= $product['description'] ?></textarea>
                                                                <label for="floatingTextarea">Mô tả</label>
                                                            </div>
                                                            <?php
                                                            $status = '';
                                                            $db = "disabled";
                                                            if ($product['status'] != 0) {
                                                                $status = "checked";
                                                            }
                                                            if ($quantity > 0) {
                                                                $db = '';
                                                            }
                                                            ?>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" id="statusPD<?= $stt ?>" onclick="changeStatusPD(<?= $stt ?>)" name="productStatus" type="checkbox" value="<?= $product['status'] ?>" role="switch" <?= $db ?> <?= $status ?>>
                                                                <label class="form-check-label" for="statusPD<?= $stt ?>">Hiện
                                                                    sản phẩm</label>

                                                            </div>
                                                            <?php if ($quantity <= 0) { ?>
                                                                <p class="text-danger">* Không thể hiển thị sản phẩm không có hàng</p>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                            <button type="submit" name="editProduct" class="btn btn-primary">Cập
                                                                nhật</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($product['status'] == 1) { ?>
                                            <span class="logged-in" style="color: green">●</span>
                                        <?php }
                                        if ($product['status'] == 0) { ?>
                                            <span class="logged-in" style="color: red">●</span>
                                        <?php } ?>

                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- List Product End -->