<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Đăng nhập admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../../ProjectSem2/Assets/admin/favicon.ico" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/JNKKKK/MoreToggles.css@0.2.1/output/moretoggles.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../ProjectSem2/Assets/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../ProjectSem2/Assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../ProjectSem2/Assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../../ProjectSem2/Assets/admin/css/style.css" rel="stylesheet">


    <!-- DataTable Lib -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="text-primary fs-4" >DOUBLE H</h3>
                            <h3 class="fs-4" >Đăng nhập</h3>
                        </div>
                        <form method="POST">
                        <div class="form-floating mb-3">
                            <input autofocus autocomplete="on" type="text" class="form-control" id="floatingInput" placeholder="Tên người dùng" name="username">
                            <label for="floatingInput ">Tên người dùng</label>
                        </div>
                        <div class="form-floating mb-4 ">
                            <input autocomplete="on" type="password" class="form-control" id="floatingPassword" placeholder="Mật khẩu" name="password">
                            <label for="floatingPassword ">Mật khẩu</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check ">
                                <input autocomplete="on" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1 ">Lưu đăng nhập</label>
                            </div>
                            <a href="">Quên mật khẩu</a>
                        </div>
                        <button type="submit" name="loginAdmin" class="btn btn-primary py-3 w-100 ">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/chart/chart.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/easing/easing.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/waypoints/waypoints.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../../ProjectSem2/Assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js "></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js "></script>
    <script src="https://kit.fontawesome.com/9e51136256.js" crossorigin="anonymous"></script>
    <script src="../../../ProjectSem2/Assets/admin/js/app.js"></script>
    <!-- Template Javascript -->
    <script src="../../../ProjectSem2/Assets/admin/js/main.js"></script>
</body>

</html>