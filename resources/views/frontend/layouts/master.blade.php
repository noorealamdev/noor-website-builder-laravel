<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>Noor - Website Builder</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/favicon.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <!-- Font css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-pro.css') }}" />
    <!-- Icons css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon_saasify.css') }}" />
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" />
    <!-- Sall css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/sal.css') }}" />
    <!-- Odometer css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}" />
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}" />
    <!-- Magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
</head>
<body>
<div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>

<!-- preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object-1" id="object_three"></div>
            <div class="object-2" id="object_two"></div>
            <div class="object-3" id="object_one"></div>
        </div>
    </div>
</div>
<!-- end: Preloader -->

<!--========== Mobile Menu Start ==============-->
<div class="tj-offcanvas-area">
    <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
        <div class="logo-area text-center">
            <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo/mobile-logo.png') }}" alt="Logo" /></a>
        </div>
        <div class="offcanvas-icon">
            <a id="canva_close" href="#">
                <i class="fa-light fa-xmark"></i>
            </a>
        </div>
    </div>
    <!-- Canvas Mobile Menu start -->
    <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
    <!-- Canvas Menu end -->
</div>
<!--========== Mobile Menu End ==============-->

<!--========== Header Section Start ==============-->
<header class="tj-header-area" id="tj-header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-content-area">
                    <div class="logo-area">
                        <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo" /></a>
                    </div>
                    <!-- Mainmenu Start -->
                    <div class="tj-main-menu d-lg-block d-none text-center" id="main-menu">
                        <ul class="main-menu">
                            <li>
                                <a class="active" href="{{ route('home') }}"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">About Us</a>
                            </li>
                            <li><a href="javascript:void(0)">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Mainmenu Item End -->
                    <div class="header-button-box d-lg-block d-none">
                        <div class="tj-login-button header-button">
                            <a class="tj-secondary-btn" href="{{ route('login') }}"> Login </a>
                        </div>
                        <div class="tj-singup-button header-button">
                            <a class="tj-primary-btn" href="javascript:void(0)"> Sing up</a>
                        </div>
                    </div>
                    <div class="tj-canva-icon d-lg-none">
                        <a class="canva_expander nav-menu-link menu-button" href="#">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========== Header Section End ==============-->

    @yield('content')

<!--========== Footer Section Start ==============-->
<footer class="tj-footer-area" data-bg-image="{{ asset('frontend/assets/images/banner/bg-group-3.svg') }}">
    <div class="footer-menu-area">
        <div class="tj-circle-box">
            <span class="circle-1"></span>
            <span class="circle-2"></span>
            <span class="circle-4"></span>
            <span class="circle-5"></span>
            <span class="circle-6"></span>
            <span class="circle-7"></span>
            <span class="circle-8"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget footer1-col-1 footer-widget-content">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo" />
                            </a>
                        </div>
                        <p class="desc">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                            minus id quod maxime placeat
                        </p>
                        <div class="footer-social-list">
                            <ul class="list-gap">
                                <li>
                                    <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="footer-widget footer1-col-2 widget_nav_menu">
                        <h6 class="title">Compnay</h6>
                        <div class="footer-menu-list">
                            <ul>
                                <li><a href="#"> About us</a></li>
                                <li><a href="#"> Contact us</a></li>
                                <li><a href="#"> Carrer</a></li>
                                <li><a href="#"> Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="footer-widget footer1-col-3 widget_nav_menu">
                        <h6 class="title">Product</h6>
                        <div class="footer-menu-list">
                            <ul>
                                <li><a href="#"> Pricing product</a></li>
                                <li><a href="#"> Mobile Apps</a></li>
                                <li><a href="#"> Web Security</a></li>
                                <li><a href="#"> Updates</a></li>
                                <li><a href="#"> WordPress</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="footer-widget footer1-col-4 widget_nav_menu">
                        <h6 class="title">Legal</h6>
                        <div class="footer-menu-list">
                            <ul>
                                <li><a href="#"> Privacy Policy</a></li>
                                <li><a href="#"> Cookies Policy</a></li>
                                <li><a href="#"> Privacy Policy</a></li>
                                <li><a href="#"> Cookies Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="footer-widget footer1-col-5 widget_nav_menu">
                        <h6 class="title">Help</h6>
                        <div class="footer-menu-list">
                            <ul>
                                <li><a href="#"> Tutorials</a></li>
                                <li><a href="#"> Knowledge </a></li>
                                <li><a href="#"> Payment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="desc text-center">
                        Copyright © 2023 <a href="#" target="_blank"> Noor. </a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--========== Footer Section End ==============-->

<!--========== Start scrollUp ==============-->
<div class="saasify-scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "
        ></path>
    </svg>
    <div class="saasify-scroll-top-icon">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            role="img"
            width="1em"
            height="1em"
            viewBox="0 0 24 24"
            data-icon="mdi:arrow-up"
            class="iconify iconify--mdi"
        >
            <path
                fill="currentColor"
                d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"
            ></path>
        </svg>
    </div>
</div>
<!--========== End scrollUp ==============-->

<!-- jquery JS -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/assets/js/bootstrap-bundle.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
<!-- Swiper.min js -->
<script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
<!-- Magnific-popup JS -->
<script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
<!-- Appear js -->
<script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
<!-- Odometer js -->
<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
<!-- Sal js -->
<script src="{{ asset('frontend/assets/js/sal.js') }}"></script>
<!-- Imagesloaded-pkgd js -->
<script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
<!-- Main js -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
