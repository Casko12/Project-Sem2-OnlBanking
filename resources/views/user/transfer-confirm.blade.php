<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url("/") }}"/>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon" />
    <title>Transfer confirmation</title>
    <meta name="description" content="Modern Bank online banking">

    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/currency-flags/css/currency-flags.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css" />

</head>
<body>
@extends("user.layout2")

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">



    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">

            <!-- Steps Progress bar -->
            <div class="row mt-4 mb-5">
                <div class="col-lg-11 mx-auto">
                    <div class="row widget-steps">
                        <div class="col-4 step complete">
                            <div class="step-name">Details</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="send-money.html" class="step-dot"></a> </div>
                        <div class="col-4 step active">
                            <div class="step-name">Confirm</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Success</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                    </div>
                </div>
            </div>
            <h2 class="fw-400 text-center mt-3">Xác Nhận Chuyển Khoản</h2>
            <p class="lead text-center mb-4">Bạn đang chuyển khoản tới <span class="fw-500">{{$user->name}}</span></p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 fw-400 mb-3 mb-sm-4">Payment Description</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Confirm
                        ============================================= -->
                        <form id="form-send-money" action="{{url("/transfer-success",["account"=>$transfer])}}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="recieverID" class="form-label">Nhập mã PIN</label>
                                <div class="input-group">
                                    <input id="pin" type="password" inputmode="number" maxlength="4"/>
                                </div>
                            </div>
                            <hr class="mx-n3 mx-sm-n5 mb-3 mb-sm-4">
                            <h3 class="text-5 fw-400 mb-3 mb-sm-4">Confirm Details</h3>
                            <hr class="mx-n3 mx-sm-n5 mb-4">

                            <p class="mb-1">Send Amount <span class="text-3 float-end">{{$reveice["amount"]}}</span></p>
                            <p class="mb-1">Total fees <span class="text-3 float-end">{{$reveice["description"]}}</span></p>

                            <hr>
                            <p class="text-4 fw-500">Total<span class="float-end">{{$reveice["amount"]}}</span></p>
                            <div class="d-grid"><button class="btn btn-primary">Send Money</button></div>

                        </form>
                        <!-- Send Money Confirm end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->



</div>
<!-- Document Wrapper end -->


<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="user/user-page/js/theme.js"></script>
</body>
</html>
