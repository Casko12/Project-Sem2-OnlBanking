<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon" />
    <title>User Page</title>
    <meta name="description" content="Modern Bank online banking">

    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
{{--    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css" />
{{--    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/daterangepicker/daterangepicker.css" />--}}
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css" />
    <!-- Colors Css -->
    @extends("user.layout")
</head>

<body>

<!-- Preloader -->


<!-- Preloader End -->

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">




    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">

                <!-- Left Panel
                ============================================= -->
                <aside class="col-lg-3">

                    <!-- Profile Details
                    =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="user/user-page/images/profile-thumb.jpg" alt="">
                            <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div>
                        </div>
                        <p class="text-3 fw-500 mb-2">Xin chào, Hà Hoàng Hưng</p>
                        <p class="mb-2"><a href="settings-profile.html" class="text-5 text-light" data-bs-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
                    </div>
                    <!-- Profile Details End -->

                    <!-- Available Balance
                    =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                        <h3 class="text-9 fw-400">VNĐ 567,000.00</h3>
                        <p class="mb-2 text-muted opacity-8">Số dư tài khoản chính</p>
                        <hr class="mx-n3">
                        <div class="d-flex"><a href="withdraw-money.html" class="btn-link me-auto">Chuyển khoản</a> <a href="deposit-money.html" class="btn-link ms-auto">Danh sách tài khoản</a></div>
                    </div>
                    <!-- Available Balance End -->

                    <!-- Need Help?
                    =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
                        <h3 class="text-5 fw-400 my-4">Bạn Cần Trợ Giúp?</h3>
                        <p class="text-muted opacity-8 mb-4">Bạn có câu hỏi liên quan đến tài khoản?<br>
                            Hãy liên lạc với chúng tôi </p>
                        <div class="d-grid"><a href="#" class="btn btn-primary">Chat với nhân viên CSKH</a></div>
                    </div>
                    <!-- Need Help? End -->

                </aside>
                <!-- Left Panel End -->

                <!-- Middle Panel
                ============================================= -->
                <div class="col-lg-9">

                    <!-- Personal Details
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Thông tin cá nhân<a href="#edit-personal-details" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Họ và tên:</p>
                            <p class="col-sm-9 text-3">Hà Hoàng Hưng</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ngày sinh:</p>
                            <p class="col-sm-9 text-3">01-01-1990</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Số CCCD:</p>
                            <p class="col-sm-9 text-3">001010010000</p>
                        </div>
                        <div class="row gx-3 align-items-baseline">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Địa chỉ:</p>
                            <p class="col-sm-9 text-3">Số 8 Tôn Thất Thuyết,<br>
                                Mỹ Đình, Từ Liêm,<br>
                                Hà Nội,<br>
                                Việt Nam.</p>
                        </div>
                    </div>


                    <!-- Account Settings
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Tuỳ chỉnh<a href="#edit-account-settings" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ngôn ngữ:</p>
                            <p class="col-sm-9 text-3">Tiếng Việt</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Time Zone:</p>
                            <p class="col-sm-9 text-3">(GMT+07:00) Bankok, Hanoi, Jakarta</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Trạng thái tài khoản:</p>
                            <p class="col-sm-9 text-3"><span class="bg-success text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-check-circle"></i> Active</span></p>
                        </div>
                    </div>


                    <!-- Email Addresses
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Email<a href="#edit-email" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email:</p>
                            <p class="col-sm-9 text-3 d-sm-inline-flex d-md-flex align-items-center">abc@gmail.com<span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></p>
                        </div>

                    </div>


                    <!-- Phone
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Điện thoại<a href="#edit-phone" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Số liên lạc:</p>
                            <p class="col-sm-9 text-3 align-items-center d-sm-inline-flex d-md-flex">+84 90 1111111<span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></p>
                        </div>

                    </div>


                </div>
                <!-- Middle Panel End -->
            </div>
        </div>
    </div>
    <!-- Content end -->



</div>
<!-- Document Wrapper end -->


<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/moment.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/daterangepicker.js"></script>
{{--<script>--}}
{{--    $(function() {--}}
{{--        'use strict';--}}
{{--        // Birth Date--}}
{{--        $('#birthDate').daterangepicker({--}}
{{--            singleDatePicker: true,--}}
{{--            showDropdowns: true,--}}
{{--            autoUpdateInput: false,--}}
{{--            maxDate: moment().add(0, 'days'),--}}
{{--        }, function(chosen_date) {--}}
{{--            $('#birthDate').val(chosen_date.format('MM-DD-YYYY'));--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script src="user/user-page/js/theme.js"></script>
</body>
</html>
