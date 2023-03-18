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

<!-- Header
         ============================================= -->
<header id="header" class="bg-dark-2 header-text-light">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                <!-- Logo
                ============================= -->
                <div class="logo me-3"> <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img src="user/user-page/images/logo-light.png" alt="Payyed" /></a> </div>
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
                            <li><a href="landing-page-send.html">Send</a></li>
                            <li><a href="landing-page-receive.html">Receive</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="fees.html">Fees</a></li>
                            <li><a href="help.html">Help</a></li>
                            <li class="dropdown active"> <a class="dropdown-toggle" href="#">Features</a>
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
                <!-- Login & Signup Link
                ============================== -->
                <nav class="login-signup navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li><a href="login.html">Login</a> </li>
                        <li class="align-items-center h-auto ms-sm-3"><a class="btn btn-primary" href="signup.html">Sign Up</a></li>
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
                    <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Payyed</a>. All Rights Reserved.</p>
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

<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/moment.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/daterangepicker.js"></script>
<script src="user/user-page/js/theme.js"></script>
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>
@yield("custom_js")
</body>
</html>
