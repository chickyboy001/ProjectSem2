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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-tshirt me-2"></i>Sản phẩm</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="?controller=showProduct" class="dropdown-item">Danh sách sản phẩm</a>
                        <a href="?controller=addCategory" class="dropdown-item">Quản lý danh mục</a>
                    </div>
                </div>
                <a href="order.html" class="nav-item nav-link active"><i class="fa fa-cart-arrow-down me-2"></i>Đơn
                    hàng</a>
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
                    <h1 class="">Chi tiết đơn hàng</h1>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Tên khách hàng:</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <strong><?= $order['cus_fullname']?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Số điện thoại:</strong>
                            </p>
                        </div>
                        <div class="text-start col-7">
                            <p>
                                <strong><?= $order['phone']?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Địa chỉ:</strong>
                            </p>
                        </div>
                        <div class=" text-start col-7 ">
                            <p>
                                <strong><?= $order['address']?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row ">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Thời gian đặt hàng:</strong>
                            </p>
                        </div>
                        <div class=" text-start col-7 ">
                            <p>
                                <strong><?= $order['order_date']?></strong>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start flex-row ">
                        <div class="text-start text-dark me-3 col-5 col-sm-2">
                            <p>
                                <strong>Người quản lý:</strong>
                            </p>
                        </div>
                        <div class=" text-start col-7 ">
                            <p>
                                <strong><?= $order['ad_fullname']?></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4 ">
                    <h6 class="mb-0 ">Danh sách sản phẩm</h6>
                </div>
                <div class=" table-responsive mb-4 ">
                    <table id="table_id " class="table text-center align-middle table-bordered table-hover mb-0 ">
                        <thead>
                            <tr class="text-dark ">
                                <th scope="col ">STT</th>
                                <th scope="col ">Tên sản phẩm</th>
                                <th scope="col ">Màu sắc</th>
                                <th scope="col ">Kích cỡ</th>
                                <th scope="col ">Số lượng</th>
                                <th scope="col ">Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 0;
                                $VND = 'đ';
                                foreach ($products as $product) { 
                                $stt++;?>
                            <tr>
                                <td><?= $stt ?></td>
                                <td><?= $product['product_name'] ?></td>
                                <td><?= $product['color'] ?></td>
                                <td><?= $product['size'] ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td><?= getFormattedNumber($product['price']).$VND ?></td>
                            </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>


                <div class="d-flex justify-content-start flex-row ">
                    <div class="text-start text-dark me-3 col-5 col-sm-2">
                        <p>
                            <strong>Thành tiền (VNĐ):</strong>
                        </p>
                    </div>
                    <div class="text-start col-7 ">
                        <?php
                                $price = 0;
                                $VND = 'đ';
                                foreach ($products as $product) { 
                                $price = $price + $product['price'];}?>
                        <p>
                            <strong><?= getFormattedNumber($price).$VND ?></strong>
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-start flex-row ">
                    <div class="text-start text-dark me-3 col-5 col-sm-2">
                        <p>
                            <strong>Trạng thái:</strong>
                        </p>
                    </div>
                    <div class="text-start col-7 ">
                        <p>
                            <strong>Hoàn thành</strong>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Recent Sales End -->