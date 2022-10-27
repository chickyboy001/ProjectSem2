<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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


        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Danh sách kích cỡ</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">#</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Sửa</th>
                                        
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stt = 0;
                                    $temps = array();
                                    foreach ($sizes as $size) {
                                        $temps[$stt] = $size['size_name'];
                                        $stt++ ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td><?= $size['size_name'] ?></td>
                                        <td><?= $size['quantity'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                data-bs-toggle="modal" data-bs-target="#size<?= $stt ?>">
                                                <lord-icon src="https://cdn.lordicon.com/alzqexpi.json" trigger="hover"
                                                    style="width:20px;height:20px">
                                                </lord-icon>
                                            </button>
                                            <div class="modal fade" id="size<?= $stt ?>" tabindex="-1"
                                                aria-labelledby="size<?= $stt ?>" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content text-start">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="size<?= $stt ?>">Thay đổi
                                                                tên danh mục</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <form id="editSize<?= $stt ?>" method="post"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="sizeId"
                                                                    value="<?= $size['size_id'] ?>" />
                                                                <div class="mb-3">
                                                                    <label for="quantityInput" class="form-label">Số
                                                                        lượng</label>
                                                                    <input type="number" name="changeQuantity"
                                                                        class="form-control">
                                                                </div>
                                                                <?php
                                                                    $status = '';
                                                                    if ($size['status'] != 0) {
                                                                        $status = "checked";
                                                                    }
                                                                    ?>
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input"
                                                                        id="sizeStatus<?= $stt ?>"
                                                                        onclick="changeStatusSize(<?= $stt ?>)"
                                                                        value="<?= $size['status'] ?>"
                                                                        name="changeStatus" type="checkbox"
                                                                        role="switch" <?= $status ?>>
                                                                    <label class="form-check-label"
                                                                        for="sizeStatus<?= $stt ?>">Hiện
                                                                        kích cỡ này</label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Đóng</button>
                                                                <button type="submit" name="editSize"
                                                                    class="btn btn-primary">Cập nhật</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <?php if ($size['status'] == 1) { ?>
                                            <span class="logged-in" style="color: green">●</span>
                                            <?php }
                                                if ($size['status'] == 0) { ?>
                                            <span class="logged-in" style="color: red">●</span>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Thêm size</h6>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="sizeNameInput" class="form-label">Chọn kích cỡ</label>
                                <select id="sizeNameInput" class="form-select mb-3" name="addSizeName" required>
                                    <option value="">None</option>
                                    <?php
                                    $clothSizes = array("XXS", "XS", "S", "M", "L", "XL", "XXL", "XXXL");
                                    $finals = array_diff($clothSizes, $temps);

                                    foreach ($finals as $final) { ?>
                                    <option value="<?= $final ?>"> <?= $final ?>
                                    </option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantityInput" class="form-label">Số lượng</label>
                                <input type="number" name="addQuantity" min="1" class="form-control" id="quantityInput"
                                    required>
                            </div>
                            <div class="m-n2">
                                <button type="submit" name="addSize" class="btn btn-outline-primary m-2">
                                    <lord-icon class="me-2" src="https://cdn.lordicon.com/cnnjfbvo.json" trigger="morph"
                                        style="width:20px;height:20px">
                                    </lord-icon>Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Recent Sales End -->