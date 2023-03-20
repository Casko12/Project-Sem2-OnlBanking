@extends("user.layout")
@section("title")
    Gửi tiết kiệm
@endsection
@section("main_content")
    <section class="loan-deatils-area bg_disable pt-130 pb-120" style="margin-top: 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="loan-details-widget bg_white">
                        <form method="post" action="{{url("/")}}">
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
                                        <a href="personal-details.html"
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
    </section>
@endsection
