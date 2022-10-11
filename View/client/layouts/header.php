<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thời trang Double H</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../ProjectSem2/Assets/client/css/css.css">
    <link rel="stylesheet" href="../../../ProjectSem2/Assets/client/font/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">
    <link rel="stylesheet" href="../../../ProjectSem2/Assets/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../ProjectSem2/Assets/client/css/all.min.css">
    <link rel="stylesheet" href="../../../ProjectSem2/Assets/client/css/style.css">
    <link rel="stylesheet" href="../../../ProjectSem2/Assets/client/css/scss.scss">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="/cssmodal.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <title>Double-H</title>
</head>

<body>
    <div class="container">
        <div class="row min-vh-100">
            <div class="col-12">
                <header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 bg-dark py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto me-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="tel:+123-456-7890"><i class="fa fa-phone-square me-2"></i>+84-358-755-327</a>
                                    </li>
                                    <li>
                                        <a href="mailto:mail@ecom.com"><i class="fa fa-envelope me-2"></i>mail@vtca.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <ul class="top-nav">
                                    <?php
                                    if (!empty($_SESSION['user'])) { ?>
                                        <li>
                                            <a href="register.php"><i class="fa-solid fa-user me-2"></i><?= $_SESSION['user']['username'] ?></a>
                                        </li>
                                        <li>
                                            <a href="?controller=logout"><i class="fa-solid fa-right-from-bracket me-2"></i></i>Đăng xuất</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="register.php"><i class="fas fa-user-edit me-2"></i>Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="?controller=loginClient"><i class="fas fa-sign-in-alt me-2"></i>Đăng nhập</a>
                                        </li>
                                    <?php }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                    <a href="index.php">Double-<span class="animate-charcter">H</span></a>
                                </div>
                            </div>
                            <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" class="form-control border-dark" placeholder="Bạn tìm gì..." required>
                                            <button class="btn btn-outline-dark" id="demo">
                                                <lord-icon src="https://cdn.lordicon.com/qehhcbpv.json" trigger="hover" style="width:18px;height:18.8px">
                                                </lord-icon>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-auto text-center text-lg-left header-item-holder">
                                <a href="#" class="header-item">
                                    <lord-icon src="https://cdn.lordicon.com/wwbrugun.json" trigger="hover" style="width:25px;height:25.8px">
                                    </lord-icon><span id="header-favorite">0</span>
                                </a>

                                <a href="cart.html" class="header-item">
                                    <lord-icon src="https://cdn.lordicon.com/gtcqrwnh.json" trigger="hover" style="width:25px;height:25.8px;">
                                    </lord-icon><span id="header-qty" class="me-3">2</span>
                                    <lord-icon src="https://cdn.lordicon.com/kgfdwvou.json" trigger="hover" style="width:25px;height:25.8px">
                                    </lord-icon><span id="header-price">$4,000</span>
                                </a>
                            </div>
                        </div>