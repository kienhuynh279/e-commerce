<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TimeZone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{('public/Font-end/site.webmanifest')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{('public/Font-end/assets/img/favicon.ico')}}">
    <!-- CSS here -->   
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{('public/Font-end/assets/css/style.css')}}">
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{('public/Font-end/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{URL::to('home')}}"><img src="{{('public/Font-end/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
                                    <li><a href="{{URL::to('shop')}}">Cửa hàng</a></li>
                                    <li><a href="{{URL::to('about')}}">Về Chúng Tôi</a></li>
                                    <li><a href="{{URL::to('blog')}}">Tin Tức</a>
                                    </li>
                                    <li><a href="#">Trang</a>
                                        <ul class="submenu">
                                            <li><a href="{{URL::to('login')}}">Đăng Nhập</a></li>
                                            <li><a href="{{URL::to('cart')}}">Giỏ Hàng</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{URL::to('contact')}}">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="{{URL::to('login')}}"><span class="flaticon-user"></span></a></li>
                                <li><a href="{{URL::to('cart')}}"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
        @yield('content')
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="{{URL::to('home')}}"><img src="{{('public/Font-end/assets/img/logo/logo2_footer.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Mỗi nhân viên dùng cả tam huyết phục vụ khách hàng của TimeZone</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Watch Shop</h4>
                                <ul>
                                    <li><a href="{{URL::to('about')}}">Về chúng tôi</a></li>
                                    <li><a href="#">Khuyến mãi</a></li>
                                    <li><a href="#">Giảm Giá</a></li>
                                    <li><a href="#">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Sản Phẩm</h4>
                                <ul>
                                    <li><a href="#">Đồng Hồ Nam</a></li>
                                    <li><a href="#">Đồng Hồ Nữ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Hỗ Trợ</h4>
                                <ul>
                                    <li><a href="#">Chăm Sóc Khách Hàng</a></li>
                                    <li><a href="#">Điều Khoản và Điều Kiện</a></li>
                                    <li><a href="#">Chính Sách Bảo Mật</a></li>
                                    <li><a href="#">Vấn Đề Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/trungkien.user" target="_blank">Trung Kien</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>                  
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="https://www.instagram.com/_trungkien.ig"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/trungkien.user"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="{{('public/Font-end/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{('public/Font-end/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/popper.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{('public/Font-end/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{('public/Font-end/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/slick.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{('public/Font-end/assets/js/wow.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/animated.headline.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{('public/Font-end/assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/jquery.sticky.js')}}"></script>
    
    <!-- contact js -->
    <script src="{{('public/Font-end/assets/js/contact.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/jquery.form.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/mail-script.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{('public/Font-end/assets/js/plugins.js')}}"></script>
    <script src="{{('public/Font-end/assets/js/main.js')}}"></script>
    
</body>
</html>