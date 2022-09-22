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

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="">
                    <h1 class="">Chi tiết sản phẩm</h1>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Mã sản phẩm:</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <strong><?= $product['product_id'] ?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Tên sản phẩm:</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <strong><?= $product['product_name'] ?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Dành cho:</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <strong><?= $product['sex'] ?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Giá (VNĐ):</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <strong><?= getFormattedNumber($product['price']) ?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Danh mục:</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <?php $category = $cateModel->getCategory($product['category_id']);?>
                                <strong><?= $category['category_name']?> </strong>
                            </p>
                        </div>
                    </div>


                    <div class=" table-responsive mb-4 ">
                        <table id="table_id " class="table text-center align-middle table-bordered table-hover mb-0 ">
                            <thead>
                                <tr class="text-dark ">
                                    <th scope="col ">STT</th>
                                    <th scope="col ">Màu sắc</th>
                                    <th scope="col ">Số lượng</th>
                                    <th scope="col ">Hình ảnh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Đen</td>
                                    <td>05</td>
                                    <td>
                                        <img class="product_image " style="width: 40px; height: 40px; "
                                            src="https://image.hoang-phuc.com/1224x0/filters:format(webp)/catalog/product//2/2/2208c7041-blk-1_1_1.jpg "></img>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Trắng</td>
                                    <td>05</td>
                                    <td>
                                        <img class="product_image " style="width: 40px; height: 40px; "
                                            src="https://image.hoang-phuc.com/1224x0/filters:format(webp)/catalog/product//2/1/2109c10285z-wht-1_2.jpg "></img>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->