<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Trang Dang Ki</title>
    <meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts


    ============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="user/userlogin/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="user/userlogin/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="user/userlogin/css/stylesheet.css" />
</head>
<body>
<div id="preloader">
    <div data-loader="dual-ring"></div>
</div>
<div id="main-wrapper" class="oxyy-login-register">
    <div id="content">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="bg-white shadow-md rounded p-3 pt-sm-4 pb-sm-5 px-sm-5">
                        <h3 class="fw-400 text-center mb-4">Đăng Kí</h3>
                        <hr class="mx-n3 mx-sm-n5">
                        <p class="lead text-center">Vui Lòng Điền Thông Tin Của Bạn </p>
                        <form id="signupForm" method="post" action="{{url("store")}}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ Và Tên</label>
                                <input type="text" class="form-control" id="Name" required placeholder="Enter Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required placeholder="Enter Your Email">
                            </div>
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Bạn Sinh Ngày?</label>
                                <input type="date" class="form-control" id="birthday" required placeholder="Enter Your Birthday">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa Chỉ Thường Trú</label>
                                <input type="text" class="form-control" id="address" required placeholder="Enter Your Address">
                            </div>
                            <div class="mb-3">
                                <label for="national_id" class="form-label">Số CMT/CCCD của bạn</label>
                                <input type="text" class="form-control" id="national_id" required placeholder="Enter Your NationalID">
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Số Điện Thoại</label>
                                <input type="text" class="form-control" id="telephone" required placeholder="Enter Your Telephone">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" required placeholder="Enter Password">
                            </div>
                            <div class="d-grid mt-4 mb-3"><button class="btn btn-primary" type="submit">Sign Up</button></div>
                        </form>
                        <p class="text-3 text-muted text-center mb-0">Already have an account? <a class="btn-link" href="{{url("login2")}}">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="user/userlogin/vendor/jquery/jquery.min.js"></script>
    <script src="user/userlogin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="user/userlogin/js/theme.js"></script>
</div>
</body>
</html>
