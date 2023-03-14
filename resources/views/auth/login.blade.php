
@section('content')
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
                <form method="post" action="{{ route('login') }}>
                    <div class="vertical-input-group">
                        <div class="input-group">
                            <input  placeholder="National_id" id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id">
                            @error('national_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid my-4"><button class="btn btn-primary shadow-none" type="submit">Login</button></div>
                </form>
                <p class="text-3 text-center text-muted mb-2">Tạo Tài Khoản Mới <a class="btn-link" href="{{route("register")}}">Sign Up</a></p>
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
