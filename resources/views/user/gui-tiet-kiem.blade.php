@extends("layouts.layout2")
<base href="{{ url("/") }}"/>
@section("custom_css")
    <link rel="stylesheet" type="text/css" href="/user/html/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/responsive.css" media="all" />
    <link href="user/user-page/images/logomba.png" rel="icon" />
@endsection
@section("title")
    Trang cá nhân
@endsection
@section("main_content")
    <div class="bg-white shadow-sm rounded p-4 mb-4">
        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Gửi tiết kiệm<a href="#edit-account-settings" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
        <hr class="mx-n4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="loan-details-widget bg_white">
                            <form method="post" action="">
                                <div class="row gy-4">
                                    <div class="col-md-8">
                                        <label class="label" for="loan-amount">Từ tài khoản</label>
                                        <div class="input-field">
                                            <span>9128391283 -- $500.000</span>
                                            <input type="number" name="money_amount" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="label" for="loan-amount">Số tiền gửi</label>
                                        <div class="input-field">
                                            <span>$</span>
                                            <input type="number" name="money_amount" class="form-control" placeholder="Nhập số tiền bạn muốn gửi">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="label mb-4">Kỳ hạn</label>
                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="date_loan_money"
                                                   value="dateloan1">
                                            <label class="form-check-label" for="inlineRadio1">12 tháng * 1,2%</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="date_loan_money"
                                                   value="dateloan2">
                                            <label class="form-check-label" for="inlineRadio2">18 tháng * 1,5%</label>
                                        </div>

                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="date_loan_money"
                                                   value="dateloan3">
                                            <label class="form-check-label" for="inlineRadio3">24 tháng * 2,1%</label>
                                        </div>

                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="date_loan_money"
                                                   value="dateloan4">
                                            <label class="form-check-label" for="inlineRadio4">36 tháng * 4,001%</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" name="date_loan_money"
                                                   value="dateloan5">
                                            <label class="form-check-label" for="inlineRadio5">48 tháng * 6,5%</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label" for="loan-return">Số tiền lãi nhận được: </label>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="label" for="loan-return" style="float: right">1000 <span>$</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="label" for="loandetails02">Phương thức đáo hạn gốc
                                        </label>
                                        <select class=" w-100" id="loandetails02">
                                            <option value="Individual-Banking">Tiếp tục gửi thêm kì mới sau khi đáo hạn</option>
                                            <option value="Business-Banking">Trả tiền về tài khoản khi đáo hạn</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="agreeBox">
                                            <label class="form-check-label" for="agreeBox">Tôi đồng ý với điều kiện và điều khoản.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  mt-60">
                                    <div class="col-md-12">
                                        <div class="nav-btn d-flex flex-wrap justify-content-between">
                                            <a
                                                class="prev-btn theme-btn-primary_alt theme-btn"><i
                                                    class="arrow_left"></i>Quay lại
                                            </a>
                                            <button class=" theme-btn-primary_alt theme-btn next-btn"
                                                    type="submit">Gửi Yêu Cầu<i class="arrow_right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
<script type="text/javascript" src="/user/html/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/user/html/js/preloader.js"></script>
<script type="text/javascript" src="/user/html/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.smoothscroll.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.nice-select.min.js"></script>
<script type="text/javascript" src="/user/html/js/parallax.js"></script>
<script type="text/javascript" src="/user/html/js/jquery.parallax-scroll.js"></script>
<script type="text/javascript" src="/user/html/js/wow.min.js"></script>
<script type="text/javascript" src="/user/html/js/custom.js"></script>
