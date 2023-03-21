<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url("/") }}"/>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon" />
    <meta name="description" content="Modern Bank online banking">
    <title>@yield("title")</title>

    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css" />
    <!-- Colors Css -->
    @yield("custom_css")
</head>
<body>
@yield("custom_css")

<!-- Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="round_spinner">
            <div class="spinner"></div>
            <div class="text">
                <img style="width: 160px"height="40px" src="/user/html/img/logo/mbanking-03.png" alt="" >
            </div>
        </div>
        <h2 class="head">BẠN CÓ BIẾT KHÔNG?</h2>
        <p style="color: red"></p>
    </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">
    <!-- Header
             ============================================= -->
    <header id="header" class="bg-dark-2 header-text-light">
        <div class="container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <!-- Logo
                    ============================= -->
                    <div class="logo me-3"> <a class="d-flex" href="/" title="Modern Banking"><img src="user/user-page/images/mbanking-03.png"  /></a> </div>
                    <!-- Logo end -->
                    <!-- Collapse Button
                    ============================== -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                    <!-- Collapse Button end -->

                    <!-- Primary Navigation
                    ============================== -->
                    <nav class="primary-menu navbar navbar-expand-lg">
                        <div id="header-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav me-auto">
                                <li><a href="/">TRANG CHỦ</a></li>
                                <li><a href="loan">KHOẢN VAY</a></li>
                                <li><a href="trans">CHUYỂN KHOẢN</a></li>
                                <li><a href="gui-tiet-kiem">GỬI TIẾT KIỆM</a></li>
                                <li class="dropdown active"> <a class="dropdown-toggle" href="#">VỀ CHÚNG TÔI</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="ve-chung-toi">Giới thiệu</a></li>
                                        <li><a class="dropdown-item" href="phat-trien">Phát triển bền vững</a></li>
                                        <li><a class="dropdown-item" href="an-toan">An toàh và bảo mật</a></li>
                                        <li><a class="dropdown-item" href="lien-he">Liên hệ với chúng tôi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Primary Navigation end -->
                </div>
                <div class="header-column justify-content-end">
                    <!-- Login & Signup Link
                    ============================== -->
                    <nav class="login-signup navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li><a href=""></a> </li>
                            <li class="align-items-center h-auto ms-sm-3"><a class="btn btn-primary" href="signup.html">Đăng xuất</a></li>
                        </ul>
                    </nav>
                    <!-- Login & Signup Link end -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

@yield("main_content")

<!-- Footer
  ============================================= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg d-lg-flex align-items-center">
                <ul class="nav justify-content-center justify-content-lg-start text-3">
                    <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
                </ul>
            </div>
            <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                <ul class="social-icons justify-content-center">
                    <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
                    <li class="social-icons-youtube"><a data-bs-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright pt-3 pt-lg-2 mt-2">
            <div class="row">
                <div class="col-lg">
                    <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Modern Banking</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

</div>
<!-- Document Wrapper end -->

<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/moment.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/daterangepicker.js"></script>
<script src="user/user-page/js/theme.js"></script>
@yield("custom_js")
</body>
</html>
