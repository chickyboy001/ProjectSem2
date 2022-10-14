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
    <style>
        /* REGISTER */
        .form-control1.success input {
            border-color: #2ecc71;
        }

        .form-control1.error input {
            border-color: #e74c3c;
        }

        .form-control1 i {
            visibility: hidden;
            position: absolute;
            top: 40px;
            right: 10px;
        }

        .form-control1.success i.fa-check-circle {
            color: #2ecc71;
            visibility: visible;
        }

        .form-control1.error i.fa-exclamation-circle {
            color: #e74c3c;
            visibility: visible;
        }

        .form-control1 small {
            color: #e74c3c;
            position: absolute;
            bottom: 0;
            left: 0;
            visibility: hidden;
        }

        .form-control1.error small {
            visibility: visible;
        }

        .form-control1 {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        /* REGISTER */

        /* SELECT COLOR */
        .select-color {
            margin-right: 5px;
        }

        #select1 {
            background-color: white;
            color: black;
            border: 1px solid black;

        }

        #select2 {
            background-color: white;
            color: black;
        }

        /* SELECT COLOR */

        /* CHECKOUT */
        .form-control-checkout.success input {
            border-color: #2ecc71;
        }

        .form-control-checkout.error input {
            border-color: #e74c3c;
        }

        .form-control-checkout i {
            visibility: hidden;
            position: absolute;
            top: 40px;
            right: 10px;
        }

        .form-control-checkout.success i.fa-check-circle {
            color: #2ecc71;
            visibility: visible;
        }

        .form-control-checkout.error i.fa-exclamation-circle {
            color: #e74c3c;
            visibility: visible;
        }

        .form-control-checkout small {
            color: #e74c3c;
            position: absolute;
            bottom: 0;
            left: 0;
            visibility: hidden;
        }

        .form-control-checkout.error small {
            visibility: visible;
        }

        .form-control-checkout {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        /* CHECKOUT */

        /* EDIT PROFILE */
        .form-control-editProfile.success input {
            border-color: #2ecc71;
        }

        .form-control-editProfile.error input {
            border-color: #e74c3c;
        }

        .form-control-editProfile i {
            visibility: hidden;
            position: absolute;
            top: 40px;
            right: 10px;
        }

        .form-control-editProfile.success i.fa-check-circle {
            color: #2ecc71;
            visibility: visible;
        }

        .form-control-editProfile.error i.fa-exclamation-circle {
            color: #e74c3c;
            visibility: visible;
        }

        .form-control-editProfile small {
            color: #e74c3c;
            position: absolute;
            bottom: 0;
            left: 0;
            visibility: hidden;
        }

        .form-control-editProfile.error small {
            visibility: visible;
        }

        .form-control-editProfile {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        /* EDIT PROFILE */

        /* THANH TRANG THAI */

        .card {
            z-index: 0;
            border-radius: 10px;
            /* max-height: 500px;
            overflow: scroll;
            outline: 0;
            background-clip: padding-box;
            border: 0;
            border: 0; */
        }

        .top {
            padding-top: 40px;
            padding-left: 13% !important;
            padding-right: 13% !important;
        }

        /*Icon progressbar*/
        #progressbar {
            margin-bottom: 30px;
            margin-top: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        #progressbar .step0:before {
            font-family: FontAwesome;
            content: "\f10c";
            color: #fff;
        }

        #progressbar li:before {
            width: 40px;
            height: 40px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            background: #C5CAE9;
            border-radius: 50%;
            margin: auto;
            padding: 0px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 12px;
            background: #C5CAE9;
            position: absolute;
            left: 0;
            top: 16px;
            z-index: -1;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: -50%;
        }

        #progressbar li:nth-child(2):after,
        #progressbar li:nth-child(3):after {
            left: -50%;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            position: absolute;
            left: 50%;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: green;
        }

        #progressbar li.active:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        .icon {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }
    </style>
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
                                            <a href="?controller=profile"><i class="fa-solid fa-user me-2"></i><?= $_SESSION['user']['username'] ?></a>
                                        </li>
                                        <li>
                                            <a href="?controller=logout"><i class="fa-solid fa-right-from-bracket me-2"></i></i>Đăng xuất</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="?controller=register"><i class="fas fa-user-edit me-2"></i>Đăng ký</a>
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