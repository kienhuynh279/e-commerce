<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hệ Thống TimeZone</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/Back-end/assets/vendors/iconfonts/mdi/css/materialdesignicons.css')}}">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('public/Back-end/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{asset('public/Back-end/assets/css/demo_1/style.css')}}">
    <!-- Layout style -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('public/Font-end/assets/img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/Back-end/assets/css/shared/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/Back-end/assets/css/shared/font-awesome.css')}}">
</head>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <div class="logo">
                    <a href="{{URL::to('dashboard')}}"><img src="{{asset('public/Font-end/assets/img/logo/logo.png')}}" alt=""></a>
                </div>
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                    </div>
                </form>

            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="{{asset('public/Back-end/assets/images/profile/male/Kien.jpg')}}" alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name">Trung Kien</p>
                    <h6 class="display-income">18607114</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">Danh mục</li>
                <li>
                <a href="{{URL::to('dashboard')}}">
                        <span class="link-title">Tổng quan</span>
                        <i class="mdi mdi-gauge link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Tài Khoản</span>
                        <i class="mdi mdi-flask link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages">
                        <li>
                            <a href="{{URL::to('admin')}}" target="_blank">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="{{URL::to('logout')}}" target="_blank">Đăng Xuất</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Danh mục sản phẩm</span>
                        <i class="mdi mdi-bullseye link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu"  id="sample-pages">
                        <li>
                            <a href="{{URL::to('add_category_product')}}">Thêm Danh Mục</a>
                        </li>
                        <li>
                            <a href="{{URL::to('all_category_product    ')}}">Tất Cả Danh Mục</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="true">
                        <span class="link-title">Nhãn Hiệu Sản Phẩm</span>
                        <i class="mdi mdi-bullseye link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages">
                        <li>
                            <a href="{{URL::to('add_brand_product')}}">Thêm Nhãn Hiệu</a>
                        </li>
                        <li>
                            <a href="{{URL::to('all_brand')}}">Tất Cả Nhãn Hiệu</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Sản Phẩm</span>
                        <i class="mdi mdi-flask link-icon"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages">
                        <li>
                            <a href="{{URL::to('add_product')}}" target="_blank">Thêm Sản Phẩm</a>
                        </li>
                        <li>
                            <a href="{{URL::to('all_product')}}" target="_blank">Liệt Kê Sản Phẩm</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        @yield('admin_content')
    </div>
    <footer class="footer">
            <div class="row">
                <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                    <small class="text-muted d-block">Copyright ©<a href="https://www.facebook.com/trungkien.user" target="_blank">Trung Kien</a> <i class="mdi mdi-heart text-danger"></i>
                </div>
            </div>
    </footer>
        <!-- partial -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{asset('public/Back-end/assets/vendors/js/core.js')}}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="{{asset('public/Back-end/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/Back-end/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('public/Back-end/assets/js/charts/chartjs.addon.js')}}"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{asset('public/Back-end/assets/js/template.js')}}"></script>
    <script src="{{asset('public/Back-end/assets/js/dashboard.js')}}"></script>
    <!-- endbuild -->
</body>

</html>