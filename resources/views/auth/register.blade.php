@section('content')
@endsection
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
                        <form id="signupForm" method="post" action="{{ route('register') }}" role="form">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ Và Tên</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input  placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Bạn Sinh Ngày?</label>
                                <input type="date" class="form-control" name="birthday" id="birthday" required placeholder="Enter Your Birthday">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa Chỉ Thường Trú</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Address" autofocus>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="national_id" class="form-label">Số CMT/CCCD của bạn</label>
                                <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id" placeholder="National_id" autofocus>
                                @error('national_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Số Điện Thoại</label>
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" placeholder="Telephone" autofocus>
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Anh khuan mat</label>
                                <input id="telephone" type="file" class="form-control @error('image_face') is-invalid @enderror" name="image_face" value="{{ old('image_face') }}" required  autofocus>
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">anh cc1</label>
                                <input id="telephone" type="file" class="form-control @error('image_id1') is-invalid @enderror" name="image_id1" value="{{ old('image_id1') }}" required  autofocus>
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">anh cc2</label>
                                <input id="telephone" type="file" class="form-control @error('image_id2') is-invalid @enderror" name="image_id2" value="{{ old('image_id2') }}" required  autofocus>
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="retype-password" class="form-label">Retype Password</label>
                                <input id="password-confirm" placeholder="Retype password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="d-grid mt-4 mb-3"><button class="btn btn-primary" name="status" value="0" type="submit">Sign Up</button></div>
                        </form>
                        <p class="text-3 text-muted text-center mb-0">Already have an account? <a class="btn-link" href="{{route("login")}}">Log In</a></p>
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
