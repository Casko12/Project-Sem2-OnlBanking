
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
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
<!-- Header -->
<header class="header">
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
                                <i class="fa-solid fa-right-to-bracket"></i><a href="{{url("login")}}">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu header-menu-2" id="sticky">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
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
                            <a href="#" class="nav-link dropdown-toggle active" role="button"
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
                            <a class="nav-link dropdown-toggle" href="loan.html" role="button"
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
                                <li class="nav-item"><a class="nav-link" href="blog.html">Giới thiệu</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">Sự tin cậy</a>
                                <li class="nav-item"><a class="nav-link" href="blog-details.html">An toàn và bảo mật</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a class="theme-btn" href="loan.html">Nhận thêm khoản vay mới</a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Header end-->


</body>
</html>
