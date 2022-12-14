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
            <a href="?controller=home" class="navbar-brand mx-4 mb-3">
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
                <a href="?controler=home" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Trang tổng
                    quát</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-tshirt me-2"></i>Sản phẩm</a>
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

        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Doanh thu ngày</p>
                            <h6 class="mb-0"><?= getFormattedNumber($revenue) . VND ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Doanh thu tuần</p>
                            <h6 class="mb-0"><?= getFormattedNumber($weekRevenue) . VND ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Đơn hôm nay</p>
                            <h6 class="mb-0"><?= $countNewOrder ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Đơn trong tuần</p>
                            <h6 class="mb-0"><?= $totalOrderWeek ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->


        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Đơn hàng gần đây</h6>
                    <a href="">Hiện tất cả</a>
                </div>
                <div class="table-responsive">
                    <table id="orderTable" class="table text-center align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">STT</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Thời gian đặt</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Người xử lý</th>
                                <th scope="col">Chi tiết</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 0;
                            foreach ($orders as $order) {
                                $stt++;
                                $customer = $accModel->getUserById($order['customer_id']);
                                if (!empty($order['admin_id'])) {
                                    $admin = $accModel->getUserById($order['admin_id']);
                                }

                                $products = $orderModel->getProductInOrder($order['order_id']);
                            ?>
                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?= $customer['fullname'] ?></td>
                                    <td><?= $order['order_date'] ?></td>

                                    <?php
                                    $price = 0;
                                    foreach ($products as $product) {
                                        $price = $price + $product['price'];
                                    } ?>
                                    <td><?= getFormattedNumber($order['total_price']) . VND ?></td>

                                    <?php if ($order['status'] == 1) { ?>
                                        <td class="text-secondary"> Đã đặt hàng</td>
                                    <?php }
                                    if ($order['status'] == 2) { ?>
                                        <td class="text-primary"> Đang xử lý </td>
                                    <?php }
                                    if ($order['status'] == 3) { ?>
                                        <td class="text-info"> Đang vận chuyển </td>
                                    <?php }
                                    if ($order['status'] == 4) { ?>
                                        <td class="text-success"> Hoàn thành </td>
                                    <?php }
                                    if ($order['status'] == 5) { ?>
                                        <td class="text-danger"> Đã hủy </td>
                                    <?php } ?>

                                    <td><?php if (isset($admin['fullname'])) 
                                    {echo $admin['fullname'];} else {echo "Chưa có";} ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info" href="?controller=orderDetail&orderId=<?= $order['order_id'] ?>">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                    </td>
                                    
                            <?php
                            $admin = NULL;} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->


        