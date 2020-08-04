<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập hệ thống TimeZone</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{('public/Back-end/assets/vendors/iconfonts/mdi/css/materialdesignicons.css')}}" />
    <link rel="stylesheet" href="{{('public/Back-end/assets/vendors/css/vendor.addons.css')}}" />
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{('public/Back-end/assets/css/shared/style.css')}}" />
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{('public/Back-end/assets/css/demo_1/style.css')}}">
    <!-- Layout style -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('public/Font-end/assets/img/favicon.ico')}}">
  </head>
  <body>
    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-12 logo-section">
          <a href="" class="logo">
            <img src="{{('public/Font-end/assets/img/logo/logo.png')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body">
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                  <form action="{{URL::to('admin_dashboard')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group input-rounded">
                      <input type="text" class="form-control" name="admin_email" placeholder="Tài khoản" />
                    </div>
                    <div class="form-group input-rounded">
                      <input type="password" class="form-control" name="admin_password" placeholder="Mật khẩu" />
                    </div>
                    <div class="form-inline">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="form-check-input" />Nhớ mật khẩu <i class="input-frame"></i>
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Đăng Nhập </button>
                  </form>
                  <div class="signup-link">
                    <p>Bạn chưa có tài khoản?</p>
                    <a href="#">Đăng kí</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="auth_footer">
        <p class="text-muted text-center">© Trung Kien</p>
      </div>
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{('public/Back-end/assets/vendors/js/core.js')}}"></script>
    <script src="{{('public/Back-end/assets/vendors/js/vendor.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{('public/Back-end/assets/js/template.js')}}"></script>
    <!-- endbuild -->
  </body>
</html>