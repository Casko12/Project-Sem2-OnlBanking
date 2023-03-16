@extends("user.layout")
@section("title")
    Khoản vay
@endsection
@section("main_content")
    <section class="loan-deatils-area bg_disable pt-130 pb-120" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loan-details-widget bg_white">
                        <form method="post" action="{{url("/addLoan")}}">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label class="label" for="loan-amount">Số tiền bạn vay</label>
                                    <div class="input-field">
                                        <span>$</span>
                                        <input type="number" name="money_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="label mb-4">Thời gian</label>
                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="date_loan_money"
                                               value="dateloan1">
                                        <label class="form-check-label" for="inlineRadio1">12 tháng</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="date_loan_money"
                                               value="dateloan2">
                                        <label class="form-check-label" for="inlineRadio2">18 tháng</label>
                                    </div>

                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="date_loan_money"
                                               value="dateloan3">
                                        <label class="form-check-label" for="inlineRadio3">24 tháng</label>
                                    </div>

                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="date_loan_money"
                                               value="dateloan4">
                                        <label class="form-check-label" for="inlineRadio4">36 tháng</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="date_loan_money"
                                               value="dateloan5">
                                        <label class="form-check-label" for="inlineRadio5">48 tháng</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="loan-return">Số tiền cần phải trả khi đến hạn trả nợ</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Để vay tiền tại ngân hàng chúng tôi hãy uploade ảnh giấy tờ liên quan để chứng minh
                                    thu nhập vd: Bảng lương, chứng minh thu nhập cá nhân,...</p>
                                </div>
                                <div class="col-md-3">
                                    <label class="label" >Ảnh chụp giấy tờ </label>
                                    <div class="input-field">
                                        <input type="file" name="image-loan1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="label" >Ảnh chụp giấy tờ 2 </label>
                                    <div class="input-field">
                                        <input type="file" name="image-loan2" class="form-control">
                                    </div>
                                </div>


                            </div>
                            <div class="row  mt-60">
                                <div class="col-md-12">
                                    <div class="nav-btn d-flex justify-content-end">
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
