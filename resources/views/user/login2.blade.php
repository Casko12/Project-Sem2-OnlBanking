<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Trang Dang Nhap</title>
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
<div id="main-wrapper" class="min-vh-100 d-flex flex-column">
    <div class="container my-auto">
        <div class="row g-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto py-5">
                <p class="lead text-center mb-4">Vui Lòng Đăng Nhập Để Sử Dụng Dịch Vụ!</p>
                <?php //Hiển thị thông báo thành công?>
                @if ( Session::has('success') )
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                @endif
                <?php //Hiển thị thông báo lỗi?>
                @if ( Session::has('error') )
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                @endif
                <form id="loginForm" method="post">
                    <div class="vertical-input-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="national_id" name="national_id" required placeholder="Your National-id">
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" id="loginPassword" name="password" required placeholder="Password">
                        </div>
                    </div>
                    <div class="d-grid my-4"><button class="btn btn-primary shadow-none" type="submit">Login</button></div>
                </form>
                <p class="text-3 text-center text-muted mb-2">Tạo Tài Khoản Mới <a class="btn-link" href="{{url("signup")}}">Sign Up</a></p>
                <p class="text-center mb-0"><a class="btn-link" href="#">Quên Mật Khẩu?</a></p>
            </div>
        </div>
    </div>
</div>
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>
<script src="user/userlogin/vendor/jquery/jquery.min.js"></script>
<script src="user/userlogin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/userlogin/js/theme.js"></script>
</body>
</html>
