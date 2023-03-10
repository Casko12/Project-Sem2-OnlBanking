<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url("/") }}"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon"/>
    <title>User Information</title>
    <meta name="description" content="Modern Bank online banking">

    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css"/>
    <!-- Colors Css -->
    @yield("custom_css")
    {{--    @extends("user.layout")--}}
</head>

<body>

@extends("layouts.layout2")

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
                        <div class="profile-thumb mt-3 mb-4"><img class="rounded-circle" width="100" height="100"
                                                                  src="{{$user->image_face}}" alt="">
                            <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip"
                                 title="Change Profile Picture"><i class="fas fa-camera position-absolute"></i>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div>
                        </div>
                        <p class="text-3 fw-500 mb-2">Xin ch??o<br> {{$user->name}}</p>
                        <p class="mb-2"><a href="settings-profile.html" class="text-5 text-light"
                                           data-bs-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a>
                        </p>
                    </div>
                    <!-- Profile Details End -->

                    <!-- Available Balance
                    =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                        <h3 class="text-9 fw-400">VN?? </h3>
                        <p class="mb-2 text-muted opacity-8">S??? d?? t??i kho???n ch??nh</p>
                        <hr class="mx-n3">
                        <div class="d-flex"><a href="#" class="btn-link me-auto">Chuy???n kho???n</a> <select
                                class="form-select" aria-label="Default select example">
                                <option>Danh s??ch t??i kho???n</option>
                                @foreach($account as $acc)
                                    <option>{{$acc->account_number}}</option>
                                @endforeach
                            </select></div>
                    </div>
                    <!-- Available Balance End -->

                    <!-- Need Help?
                    =============================== -->
                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
                        <h3 class="text-5 fw-400 my-4">B???n C???n Tr??? Gi??p?</h3>
                        <p class="text-muted opacity-8 mb-4">B???n c?? c??u h???i li??n quan ?????n t??i kho???n?<br>
                            H??y li??n l???c v???i ch??ng t??i </p>
                        <div class="d-grid"><a href="#" class="btn btn-primary">Chat v???i nh??n vi??n CSKH</a></div>
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
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Th??ng tin c?? nh??n<a
                                href="#edit-personal-details" data-bs-toggle="modal"
                                class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i
                                        class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">H??? v?? t??n:</p>
                            <p class="col-sm-9 text-3">{{$user->name}}</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ng??y sinh:</p>
                            <p class="col-sm-9 text-3">{{date_format(date_create($user->birthday),"d-m-Y")}}</p>
                        </div>

                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">S??? CCCD:</p>
                            <p class="col-sm-9 text-3">{{$user->national_id}}</p>
                        </div>
                        <div class="row gx-3 align-items-baseline">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">?????a ch???:</p>
                            <p class="col-sm-9 text-3">{{$user->address}}</p>
                        </div>
                    </div>


                    <!-- Account Settings
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Tu??? ch???nh<a
                                href="#edit-account-settings" data-bs-toggle="modal"
                                class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i
                                        class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ng??n ng???:</p>
                            <p class="col-sm-9 text-3">Ti???ng Vi???t</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Time Zone:</p>
                            <p class="col-sm-9 text-3">(GMT+07:00) Bankok, Hanoi, Jakarta</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Tr???ng th??i t??i kho???n:</p>
                            @if($user->status ==1)
                                <p class="col-sm-9 text-3"><span
                                        class="bg-success text-white rounded-pill d-inline-block px-2 mb-0"><i
                                            class="fas fa-check-circle"></i> Active</span></p>
                            @elseif($user->status ==2)
                                <p class="col-sm-9 text-3"><span
                                        class="bg-info text-white rounded-pill d-inline-block px-2 mb-0"><i
                                            class="fas fa-exclamation-circle"></i> Pending</span></p>
                            @else
                                <p class="col-sm-9 text-3"><span
                                        class="bg-danger text-white rounded-pill d-inline-block px-2 mb-0"><i
                                            class="fas fa-times-circle"></i> Deactive</span></p>
                            @endif
                        </div>
                    </div>


                    <!-- Email Addresses
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Email<a href="#edit-email"
                                                                                         data-bs-toggle="modal"
                                                                                         class="ms-auto text-2 text-uppercase btn-link"><span
                                    class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email:</p>
                            <p class="col-sm-9 text-3 d-sm-inline-flex d-md-flex align-items-center">{{$user->email}}
                                <span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></p>
                        </div>

                    </div>


                    <!-- Phone
                    ============================================= -->
                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">??i???n tho???i<a href="#edit-phone"
                                                                                              data-bs-toggle="modal"
                                                                                              class="ms-auto text-2 text-uppercase btn-link"><span
                                    class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">S??? li??n l???c:</p>
                            <p class="col-sm-9 text-3 align-items-center d-sm-inline-flex d-md-flex">{{$user->telephone}}
                                <span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></p>
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
<script src="user/user-page/js/theme.js"></script>
@yield("custom_js")
</body>
</html>
