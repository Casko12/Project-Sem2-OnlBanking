<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Money transfer</title>
    <meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
    <meta name="author" content="harnishdesign.net">

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
    @extends("user.layout")
</head>
<body>



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
                        <div class="col-4 step active">
                            <div class="step-name">Details</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
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
            <h2 class="fw-400 text-center mt-3">Chuyển Khoản Qua Số Tài Khoản</h2>
            <p class="lead text-center mb-4">An toàn, Nhanh chóng, Thuận tiện.</p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 fw-400 mb-3 mb-sm-4">Thông tin chuyển khoản</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Form
                        ============================ -->
                        <form id="form-send-money" method="post">
                            <div class="mb-3">
                                <label for="bankID" class="form-label">Chọn Ngân Hàng</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Vui Lòng Chọn Ngân Hàng</option>
                                    <option value="1">MB</option>
                                    <option value="2">Agribank</option>
                                    <option value="3">Techcombank</option>
                                    <option value="4">Vietcombank</option>
                                    <option value="5">BIDV</option>
                                    <option value="6">TPBank</option>
                                </select></div>
                            <div class="mb-3">
                                <label for="recieverID" class="form-label">Số Tài Khoản</label>
                                <div class="input-group">
                                    <input type="text" required class="form-control" data-bv-field="ReceiverID" id="receiverID" value="" placeholder="Số tài khoản">

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="recieverID" class="form-label">Tên Tài Khoản</label>
                                <p class="lead text-left mb-4">Hà Hoàng Hưng</p>

                            </div>
                            <div class="mb-3">
                                <label for="recipientGets" class="form-label">Số tiền</label>
                                <div class="input-group">
                                    <span class="input-group-text">VNĐ</span>
                                    <input type="number" required class="form-control" data-bv-field="recipientGets" id="recipientGets" value="1,410.06" placeholder="">
                                    <span class="input-group-text p-0">
                    </span>
                                </div>
                            </div>
                            <div class="mb-4 mb-sm-5">
                                <label for="description" class="form-label">Nội dung chuyển khoản</label>
                                <textarea class="form-control" rows="4" id="description" required placeholder="Nhập nội dung chuyển khoản"></textarea>
                            </div><hr>
                            <p>Phí<span class="float-end">00.00 VNĐ</span></p>
                            <hr>
                            <p class="text-4 fw-500">Tổng<span class="float-end">500,000.00 VNĐ</span></p>
                            <div class="d-grid"><button class="btn btn-primary">Continue</button></div>
                        </form>
                        <!-- Send Money Form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->


</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->

<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="user/user-page/js/theme.js"></script>
</body>
</html>
