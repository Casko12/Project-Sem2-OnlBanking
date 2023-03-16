
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
                        <h3 class="fw-400 text-center mb-4">Đăng Kí</h3>
                        <hr class="col-md-12" style="color: red">
                        <p class="lead text-center" >Vui Lòng Điền Thông Tin Của Bạn </p>
                        <form id="signupForm" method="post" action="{{ route('register') }}" enctype="multipart/form-data" role="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label" style="color: red">Họ Và Tên *</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Tên" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label"style="color: red">Email *</label>
                                    <input  placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="birthday" class="form-label"style="color: red">Bạn Sinh Ngày? *</label>
                                    <input type="date" class="form-control" name="birthday" id="birthday" required placeholder="Enter Your Birthday">
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label"style="color: red">Địa Chỉ Thường Trú *</label>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Địa chỉ của bạn" autofocus>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="national_id" class="form-label"style="color: red">Số CMT/CCCD của bạn *</label>
                                    <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id" placeholder="Căn cước công dân" autofocus>
                                    @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="telephone" class="form-label"style="color: red">Số Điện Thoại *</label>
                                    <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" placeholder="Số điện thoại" autofocus>
                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="telephone" class="form-label"style="color: red">Ảnh chân dung *</label>
                                    <input id="image_face" type="file" class="form-control @error('image_face') is-invalid @enderror" name="image_face" value="{{ old('image_face') }}" required  autofocus>
                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="telephone" class="form-label" style="color: red">Ảnh mặt trước căn cước *</label>
                                    <input id="image_id1" type="file" class="form-control @error('image_id1') is-invalid @enderror" name="image_id1" value="{{ old('image_id1') }}" required  autofocus>
                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="telephone" class="form-label"style="color: red">Ảnh mặt sau căn cước * </label>
                                    <input id="image_id2" type="file" class="form-control @error('image_id2') is-invalid @enderror" name="image_id2" value="{{ old('image_id2') }}" required  autofocus>
                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label"style="color: red">Mã Pin *</label>
                                    <input placeholder="Mã Pin" id="pin" type="password" class="form-control @error('pin') is-invalid @enderror" name="pin" required autocomplete="new-password">
                                    @error('pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password" class="form-label"style="color: red">Mật khẩu *</label>
                                    <input placeholder="Mật khẩu" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="retype-password" class="form-label" style="color: red">Xác nhận mật khẩu *</label>
                                    <input id="password-confirm" placeholder="xác nhận mật khẩu" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-grid mt-4 col-md-2"><button class="btn btn-primary" name="status" value="0" type="submit">Đăng kí</button></div>
                                <div class="d-grid mt-4 col-md-10"><p style="margin-top: 29px;font-size: 16px">Already have an account? <a class="btn-link" href="{{route("login")}}">Log In</a><p></p></div>
                            </div>
                        </form>

            </div>
        </div>
    </div>
    <script src="user/userlogin/vendor/jquery/jquery.min.js"></script>
    <script src="user/userlogin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="user/userlogin/js/theme.js"></script>
</div>
</body>
</html>
