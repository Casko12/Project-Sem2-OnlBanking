<!DOCTYPE html>
<html lang="en">
<head>
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
{{--    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/daterangepicker/daterangepicker.css" />--}}
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css" />

    <link rel="stylesheet" type="text/css" href="/user/html/css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/responsive.css" media="all" />
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
    <header class="header" >
        <div class="header-top py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="header-info-left">
                            <div class="language-list">
                                <select id="select-lang">
                                    <option value="VietNam">Tiếng Việt</option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="French">French</option>
                                    <option value="Hindi">Hindi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-6">
                        <div class="header-info-right">
                            <ul>
                                <li>
                                    <img class="img-fluid" src="/user/html/img/phone-outline-white.png" alt="phone"><a
                                        href="tel:0329226456">0329.226.456</a>
                                </li>

                                <li>
                                    <i class="icon_mail_alt"></i><a
                                        href="mailto:thanhtvth2203024@fpt.edu.vn">thanhtvth2203024@fpt.edu.vn</a>
                                </li>
                                <li>


                                    @guest
                                        <i class="fa-solid fa-right-to-bracket"></i><a href="{{route("login")}}">Đăng nhập</a>
                                    @endguest

                                    @auth
                                        <form action="{{route("logout")}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-default" style="color: #bbc0c4">Đăng xuất</button>

                                        </form>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu header-menu-2" id="sticky">
            <nav class="navbar navbar-expand-lg ">
                <div class="container" >
                    <a class="navbar-brand" href="{{url("/")}}">
                        <img style="width: 160px"height="40px" src="/user/html/img/logo/mbanking-03.png" alt="logo" >
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu ms-auto">
                            <li class="nav-item dropdown submenu ">
                                <a href="/" class="nav-link dropdown-toggle active" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                   data-bs-toggle="dropdown"></i>
                                {{--                            <ul class="dropdown-menu">--}}
                                {{--                                <li class="nav-item "><a href="index.html" class="nav-link ">Demo 01</a>--}}
                                {{--                                </li>--}}
                                {{--                                <li class="nav-item "><a href="index-2.html" class="nav-link active">Demo 02</a>--}}
                                {{--                                </li>--}}
                                {{--                            </ul>--}}
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="{{url("/loan")}}" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Khoản vay
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                   data-bs-toggle="dropdown"></i>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="{{url("trans")}}" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Chuyển khoản
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                   data-bs-toggle="dropdown"></i>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Gửi tiết kiệm
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                   data-bs-toggle="dropdown"></i>

                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Về chúng tôi
                                </a>

                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                   data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu ">
                                    <li class="nav-item"><a  class="nav-link" href="{{url("/ve-chung-toi")}}">Giới thiệu</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/phat-trien")}}">Phát triển bền vững</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/an-toan")}}">An toàn và bảo mật</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/lien-he")}}">Liên hệ với chúng tôi</a></li>
                                </ul>
                            </li>

                        </ul>
                        <a class="theme-btn" href="{{url("/user-info")}}">Tài khoản của bạn</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->
    <div id="content" class="py-4" style="margin-top: 130px">
@yield("main_content")
    </div>
    <!-- Footer
  ============================================= -->
    <footer class="footer footer-3">
        <div class="footer-top  pt-200 pb-lg-115 pb-120">
            <div class="container">
                <div class="row gx-0 pt-45 ">

                    <div class="col-lg-4 col-sm-6 text-center text-sm-start ms-0 ">
                        <div class="footer-widget wow fadeInLeft mb-30">
                            <div class="footer-text mb-20">
                                <p>Modern Bank là một ngân hàng hàng đầu trong khu vực thế giới và là một tổ chức ngân hàng quốc tế nổi bật</p>
                            </div>

                            <span class="overline">Trích dẫn</span>

                            <div class="footer-bold">
                                <span class="counter">$<span>35.105</span> </span>
                                <span class="counter">-<span>0.46</span>% </span>
                            </div>
                            <p class="time">2021-01-05 14:00 (Giờ quốc tế)</p>
                        </div>
                    </div>


                    <div class="col-lg-2 col-sm-6 text-center text-sm-start ms-lg-5 ">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="f-widget-title">
                                <h5>Tổng Quan</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li class="nav-item"><a  class="nav-link" href="{{url("/ve-chung-toi")}}">Giới thiệu</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/phat-trien")}}">Phát triển bền vững</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/an-toan")}}">An toàn và bảo mật</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/lien-he")}}">Liên hệ với chúng tôi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  col-sm-6 text-center text-sm-start ms-lg-5">
                        <div class="footer-widget mb-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="f-widget-title">
                                <h5>Truy Cập Trực Tiếp</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li class="nav-item"><a  class="nav-link" href="{{url("/gia-tri-cot-loi")}}">Giá trị cốt lõi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/phat-trien")}}">Phát triển bền vững</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/an-toan")}}">An toàn và bảo mật</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url("/lien-he")}}">Liên hệ với chúng tôi</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area -->
        <div class="copyright pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-center text-lg-start">
                        <img class="p-0 m-0" style="width: 160px"height="40px" src="/user/html/img/logo/mbanking-03.png" alt="logo" >
                    </div>
                    <div class="col-lg-5 text-center my-3 my-sm-0">
                        <div class="copyright-text">
                            <p>Copyright&copy; Modern 2021. <br class="d-sm-none"> <a class="ms-2" href="#">Privecy</a> |
                                <a class="ms-0" href="#">Term of
                                    Use</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end ">
                        <div class="social-button">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
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

{{--<script type="text/javascript" src="/user/html/js/jquery-3.6.0.min.js"></script>--}}
<script type="text/javascript" src="/user/html/js/preloader.js"></script>
{{--<script type="text/javascript" src="/user/html/js/bootstrap.bundle.min.js"></script>--}}
<script type="text/javascript" src="/user/html/js/jquery.smoothscroll.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.nice-select.min.js"></script>
<script type="text/javascript" src="/user/html/js/parallax.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.parallax-scroll.js"></script>
<script type="text/javascript" src="/user/html/js/wow.min.js"></script>
<script type="text/javascript" src="/user/html/js/custom.js"></script>
@yield("custom_js")
</body>
</html>
