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
                    <div class="logo me-3"> <a class="d-flex" href="/" title="Modern Banking"><img src="user/user-page/images/mbanking-03.png" alt="Payyed" /></a> </div>
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

    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">

                <!-- Left Panel
                ============================================= -->
                <aside class="col-lg-4">

                    <!-- Hello + edit
                    =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" width="100" height="100" src="{{$user->image_face}}" alt="">
                            <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div>
                        </div>
                        <p class="text-3 fw-500 mb-2">Xin chào<br> {{$user->name}}</p>
                        <p class="mb-2"><a href="#edit-personal-details" class="text-5 text-light" data-bs-toggle="modal" title="Edit Profile"><i class="fas fa-edit"></i></a></p>

                        {{--                        edit personal detail--}}
                        <div id="edit-personal-details" class="modal fade " role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-400">Sửa thông tin cá nhân</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form id="personaldetails" method="post">
                                            <div class="row g-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="firstName" class="form-label">Họ và tên</label>
                                                    <input type="button" value="Nguyễn Văn A" class="form-control" data-bv-field="firstName" id="firstName" required placeholder="Họ và tên">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="lastName" class="form-label">Số CCCD</label>
                                                    <input type="button" value="001010011111" class="form-control" data-bv-field="lastName" id="lastName" required placeholder="Số CCCD">
                                                </div>
                                                <div class="col-12">
                                                    <label for="birthDate" class="form-label">Ngày sinh</label>
                                                    <div class="position-relative">
                                                        <input id="birthDate" value="12-09-1982" type="button" class="form-control" required placeholder="Date of Birth">
                                                        <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="address" class="form-label">Địa chỉ</label>
                                                    <input type="button" value="Số 8 Tôn Thất Thuyết" class="form-control" data-bv-field="address" id="address" required placeholder="Địa chỉ">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="city" class="form-label">Thay đổi Email</label>
                                                    <input type="text" id="city" value="abc@gmail.com" type="text" class="form-control" required placeholder="City">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="zipCode" class="form-label">Thay đổi số điện thoại</label>
                                                    <input id="zipCode" value="22434" type="text" class="form-control" required placeholder="Số điện thoại">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="zipCode" class="form-label">Thay đổi mật khẩu</label>
                                                    <input id="zipCode" value="" type="text" class="form-control" required placeholder="Mời điền mật khẩu mới">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="zipCode" class="form-label">Thay đổi mã PIN</label>
                                                    <input id="zipCode" value="" type="text" class="form-control" required placeholder="Mời điền mã PIN mới">
                                                </div>
                                                <div class="col-12 mt-4 d-grid"><button class="btn btn-primary" type="submit">Lưu Thay Đổi</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        edit personal detail end--}}

                    </div>
                    <!-- Hello + Edit End -->

                    <!-- Profile Details
                   =============================== -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Thông tin cá nhân</h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ngày sinh:</p>
                            <p class="col-sm-9 text-3">{{$user->birthday}}</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Số CCCD:</p>
                            <p class="col-sm-9 text-3">{{$user->national_id}}</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Số Điện thoại:</p>
                            <p class="col-sm-9 text-3">{{$user->telephone}}</p>
                        </div>
                        <div class="row gx-3 align-items-baseline">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Địa chỉ:</p>
                            <p class="col-sm-9 text-3">{{$user->address}}</p>
                        </div>
                        <div class="row gx-3 align-items-baseline">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email:</p>
                            <p class="col-sm-9 text-3">{{$user->email}}</p>
                        </div>
                    </div>
                    <!-- Profile Details End -->

                </aside>
                <!-- Left Panel End -->
                <div class="col-lg-8">

                    <!-- Personal Details
                    ============================================= -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-touch="false">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            @for($i=0;$i<count($allaccount)-1;$i++)
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i+1}}" aria-label="Slide {{$i+2}}"></button>
                            @endfor
                        </div>
                        <div class="carousel-inner">
                            @foreach($allaccount as $item)
                            <div class="carousel-item @if($loop->first)active @endif" data-bs-interval="10000 ">
                                <img src="user/user-page/images/account.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 class="text-7 fw-400">Tài khoản số: {{"$item->account_number"}}</h2>
                                    <h3 class="text-9 fw-400">{{number_format($item->balance)}} VNĐ</h3>
                                    <p class="mb-2 text-muted opacity-8">Số dư tài khoản chính</p>
                                    <hr class="mx-n3">
                                    <div class="multi-button">
                                        <button><i class="fas fa-coins"></i> Tiết kiệm</button>
                                        <form action="{{url("/money-transfer")}}" method="get">
                                            <button type="submit" name="transfer_id" value="{{$item->id}}"><i class="fas fa-hand-holding-usd"></i> Chuyển khoản</button>
                                        </form>
                                        <form action="{{url("/transacion-history",["account"=>$item->id])}}" method="get">
                                            <button type="submit" name="transfer_id" value="{{$item->id}}"><i class="fas fa-file-invoice-dollar"></i></i> Lịch sử giao dịch</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Account Settings
                    ============================================= -->
                    @yield("main_content")

                </div>


            </div>
        </div>
    </div>
    <!-- Content end -->

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
</div>
<!-- Document Wrapper end -->
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
