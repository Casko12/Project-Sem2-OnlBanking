<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" type="text/css" href="/user/html/css/bootstrap.min.css" media="all" />--}}
    <link rel="stylesheet" type="text/css" href="/user/html/css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/responsive.css" media="all" />
    <link href="user/user-page/images/logomba.png" rel="icon" />
    <title>@yield("title")</title>
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

<!-- Header
 ============================================= -->
<header id="header">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                <!-- Logo
                ============================= -->
                <div class="logo me-3"> <a class="d-flex" href="index.html" ><img src="user/user-page/images/mbanking-03.png" alt="Payyed" /></a> </div>
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
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="transactions.html">Transactions</a></li>
                            <li class="active"><a href="send-money.html">Send/Request</a></li>
                            <li><a href="help.html">Help</a></li>
                            <li class="dropdown"> <a class="dropdown-toggle" href="#">Features</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Light Version (Default)</a></li>
                                            <li><a class="dropdown-item" href="feature-header-dark.html">Dark Version</a></li>
                                            <li><a class="dropdown-item" href="feature-header-primary.html">Primary Version</a></li>
                                            <li><a class="dropdown-item" href="index-2.html">Transparent Version</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navigation DropDown</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Light Version (Default)</a></li>
                                            <li><a class="dropdown-item" href="feature-navigation-dropdown-dark.html">Dark Version</a></li>
                                            <li><a class="dropdown-item" href="feature-navigation-dropdown-primary.html">Primary Version</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Second Navigation</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="send-money.html">Default Version</a></li>
                                            <li><a class="dropdown-item" href="deposit-money.html">Alternate Version</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="feature-page-header-left-alignment.html">Left Alignment</a></li>
                                            <li><a class="dropdown-item" href="feature-page-header-center-alignment.html">Center Alignment</a></li>
                                            <li><a class="dropdown-item" href="feature-page-header-light.html">Light Version</a></li>
                                            <li><a class="dropdown-item" href="feature-page-header-dark.html">Dark Version</a></li>
                                            <li><a class="dropdown-item" href="feature-page-header-primary.html">Primary Version</a></li>
                                            <li><a class="dropdown-item" href="feature-page-header-custom-background.html">Custom Background</a></li>
                                            <li><a class="dropdown-item" href="feature-page-header-custom-background-with-transparent-header.html">Custom Background 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Light Version Default</a></li>
                                            <li><a class="dropdown-item" href="index-2.html">Alternate Version</a></li>
                                            <li><a class="dropdown-item" href="feature-footer-dark.html">Dark Version</a></li>
                                            <li><a class="dropdown-item" href="feature-footer-primary.html">Primary Version</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="feature-layout-boxed.html">Layout Boxed</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="dropdown-mega-content">
                                            <div class="row">
                                                <div class="col-lg"> <span class="sub-title">Homepage</Span>
                                                    <ul class="dropdown-mega-submenu">
                                                        <li><a class="dropdown-item" href="index.html">Home Version 1</a></li>
                                                        <li><a class="dropdown-item" href="index-2.html">Home Version 2</a></li>
                                                        <li><a class="dropdown-item" href="landing-page-send.html">Landing Page - Send</a></li>
                                                        <li><a class="dropdown-item" href="landing-page-receive.html">Landing Page - Receive</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg"> <span class="sub-title">Account</Span>
                                                    <ul class="dropdown-mega-submenu">
                                                        <li><a class="dropdown-item" href="settings-profile.html">My Profile</a></li>
                                                        <li><a class="dropdown-item" href="settings-security.html">Security</a></li>
                                                        <li><a class="dropdown-item" href="settings-payment-methods.html">Payment Methods</a></li>
                                                        <li><a class="dropdown-item" href="settings-notifications.html">Notifications</a></li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="login.html">Login Page 1</a></li>
                                                                <li><a class="dropdown-item" href="login-2.html">Login Page 2</a></li>
                                                                <li><a class="dropdown-item" href="login-3.html">Login Page 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Signup</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="signup.html">Signup Page 1</a></li>
                                                                <li><a class="dropdown-item" href="signup-2.html">Signup Page 2 </a></li>
                                                                <li><a class="dropdown-item" href="signup-3.html">Signup Page 3 </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg"> <span class="sub-title">Dashboard</Span>
                                                    <ul class="dropdown-mega-submenu">
                                                        <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                                                        <li><a class="dropdown-item" href="transactions.html">Transactions</a></li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Send Money</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="send-money.html">Send Money</a></li>
                                                                <li><a class="dropdown-item" href="send-money-confirm.html">Send Money Confirm</a></li>
                                                                <li><a class="dropdown-item" href="send-money-success.html">Send Money Success </a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Request Money</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="request-money.html">Request Money</a></li>
                                                                <li><a class="dropdown-item" href="request-money-confirm.html">Request Money Confirm</a></li>
                                                                <li><a class="dropdown-item" href="request-money-success.html">Request Money Success </a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Deposit Money</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="deposit-money.html">Deposit Money</a></li>
                                                                <li><a class="dropdown-item" href="deposit-money-confirm.html">Deposit Money Confirm</a></li>
                                                                <li><a class="dropdown-item" href="deposit-money-success.html">Deposit Money Success </a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Withdraw Money</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="withdraw-money.html">Withdraw Money</a></li>
                                                                <li><a class="dropdown-item" href="withdraw-money-confirm.html">Withdraw Money Confirm</a></li>
                                                                <li><a class="dropdown-item" href="withdraw-money-success.html">Withdraw Money Success </a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="notifications.html">Notifications</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg"> <span class="sub-title">Blog</Span>
                                                    <ul class="dropdown-mega-submenu">
                                                        <li><a class="dropdown-item" href="blog.html">Blog Standard</a></li>
                                                        <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                                                        <li><a class="dropdown-item" href="blog-single.html">Blog Single Right Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg"> <span class="sub-title">Others</Span>
                                                    <ul class="dropdown-mega-submenu">
                                                        <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                                        <li><a class="dropdown-item" href="fees.html">Fees</a></li>
                                                        <li><a class="dropdown-item" href="help.html">Help</a></li>
                                                        <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                                        <li><a class="dropdown-item" href="404.html">404</a></li>
                                                        <li><a class="dropdown-item" href="coming-soon.html" target="_blank">Coming Soon</a></li>
                                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Elements</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="elements.html">Elements 1</a></li>
                                                                <li><a class="dropdown-item" href="elements-2.html">Elements 2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Primary Navigation end -->
            </div>
            <div class="header-column justify-content-end">
                <!-- My Profile
                ============================== -->
                <nav class="login-signup navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="dropdown language"> <a class="dropdown-toggle" href="#">En</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">French</a></li>
                                <li><a class="dropdown-item" href="#">Русский</a></li>
                                <li><a class="dropdown-item" href="#">简体中文</a></li>
                                <li><a class="dropdown-item" href="#">Türkçe</a></li>
                            </ul>
                        </li>
                        <li class="dropdown notifications"> <a class="dropdown-toggle" href="#"><span class="text-5"><i class="far fa-bell"></i></span><span class="count">3</span></a>
                            <ul class="dropdown-menu">
                                <li class="text-center text-3 py-2">Notifications (3)</li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new digital FIRC document is available for you to download<span class="text-1 text-muted d-block">22 Jul 2021</span></a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates to our privacy policy. Please read.<span class="text-1 text-muted d-block">04 March 2021</span></a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update about Payyed fees<span class="text-1 text-muted d-block">18 Feb 2021</span></a></li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item text-center text-primary px-0" href="notifications.html">See all Notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown profile ms-2"> <a class="px-0 dropdown-toggle" href="#"><img class="rounded-circle" src="user/user-page/images/profile-thumb-sm.jpg" alt=""></a>
                            <ul class="dropdown-menu">
                                <li class="text-center text-3 py-2">Hi, Smith Rhodes</li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item" href="settings-profile.html"><i class="fas fa-user"></i>My Profile</a></li>
                                <li><a class="dropdown-item" href="settings-Security.html"><i class="fas fa-shield-alt"></i>Security</a></li>
                                <li><a class="dropdown-item" href="settings-payment-methods.html"><i class="fas fa-credit-card"></i>Payment Methods</a></li>
                                <li><a class="dropdown-item" href="settings-notifications.html"><i class="fas fa-bell"></i>Notifications</a></li>
                                <li class="dropdown-divider mx-n3"></li>
                                <li><a class="dropdown-item" href="help.html"><i class="fas fa-life-ring"></i>Need Help?</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- My Profile end -->
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- footer -->
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
                                <li><a href="#"> Lĩnh vực kinh doanh cốt lõi của chúng tôi
                                    </a></li>
                                <li><a href="#"> Công việc & Nghề nghiệp</a></li>
                                <li><a href="#"> Trách nhiệm của chúng tôi</a></li>
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
                                <li><a href="#"> Tin tức của chúng tôi</a></li>
                                <li><a href="#"> Thông báo của chúng tôi</a></li>
                                <li><a href="#"> Lời mời làm việc của chúng tôi</a></li>
                                <li><a href="#"> Trang web của chúng tôi</a></li>
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
<!-- footer end -->
<!-- Back to top button -->
<a id="back-to-top" title="Back to Top"></a>
<script type="text/javascript" src="/user/html/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/user/html/js/preloader.js"></script>
<script type="text/javascript" src="/user/html/js/bootstrap.bundle.min.js"></script>
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
