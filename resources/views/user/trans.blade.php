<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chuyển khoản </title>
    @include("user.html.css")
</head>
<body>
@include("user.html.header")
@include("user.html.section-banner")



<body>

<!-- Preloader -->
<div id="preloader">
    <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="min-vh-100 d-flex flex-column">
    <!-- Login Form
    ============================================= -->
    <div class="container my-auto">
        <div class="row g-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto py-5">
                <div class="logo text-center"> <a href="../../../../../../Users/HP/OneDrive/Desktop/theme/payyed-money-transfer-and-online-payments-html-template-2.0/HTML/index.html" title="Payyed - HTML Template"><img src="../../../../../../Users/HP/OneDrive/Desktop/theme/payyed-money-transfer-and-online-payments-html-template-2.0/HTML/images/logo-lg.png" alt="Payyed"></a> </div>
                <p class="lead text-center mb-4">We are glad to see you again!</p>
                <form id="loginForm" method="post">
                    <div class="vertical-input-group">
                        <div class="input-group">
                            <input type="email" class="form-control" id="emailAddress" required placeholder="Your Email">
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                        </div>
                    </div>
                    <div class="d-grid my-4"><button class="btn btn-primary shadow-none" type="submit">Login</button></div>
                </form>
                <p class="text-3 text-center text-muted mb-2">Don't have an account? <a class="btn-link" href="../../../../../../Users/HP/OneDrive/Desktop/theme/payyed-money-transfer-and-online-payments-html-template-2.0/HTML/signup-2.html">Sign Up</a></p>
                <p class="text-center mb-0"><a class="btn-link" href="#">Forgot Password?</a></p>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    <!-- Footer
    ============================================= -->
    <div class="container-fluid bg-white py-2">
        <p class="text-center text-muted mb-0">Copyright &copy; 2022 <a href="#">Payyed</a>. All Rights Reserved.</p>
    </div>


</div>

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Script -->
<script src="../../../../../../Users/HP/OneDrive/Desktop/theme/payyed-money-transfer-and-online-payments-html-template-2.0/HTML/vendor/jquery/jquery.min.js"></script>
<script src="../../../../../../Users/HP/OneDrive/Desktop/theme/payyed-money-transfer-and-online-payments-html-template-2.0/HTML/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../../../../Users/HP/OneDrive/Desktop/theme/payyed-money-transfer-and-online-payments-html-template-2.0/HTML/js/theme.js"></script>
</body>



@include("user.html.js")
</body>
</html>
