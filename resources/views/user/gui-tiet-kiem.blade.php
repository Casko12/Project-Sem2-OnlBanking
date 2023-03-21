@extends("layouts.layout2")
<base href="{{ url("/") }}"/>

@section("title")
    Khoản vay
@endsection
@section("main_content")
    <div class="bg-white shadow-sm rounded p-4 mb-4">
        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Gửi tiết kiệm</h3>
        <hr class="mx-n4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="loan-details-widget bg_white">
                        <form method="post" action="{{url("/addLoan")}}">
                            <div class="row gy-4">
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Từ tài khoản</label>
                                    <div class="input-field">
                                        <span><span>Số: 9128391283 -- Số dư: $500.000</span></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Số tiền muốn gửi</label>
                                    <div class="input-field">
                                        <input type="number" name="money_amount" class="form-control" placeholder="$">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label mb-4">Kỳ hạn</label><br>
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
                                <div class="col-md-8">
                                    <label class="label" for="loan-return">Số tiền cần phải thanh toán khi đến hạn: </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="label" for="loan-return" style="float: right">1000 <span>$</span></label>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-return">Để vay tiền tại ngân hàng chúng tôi hãy uploade ảnh giấy tờ liên quan để chứng minh
                                        thu nhập vd: Bảng lương, chứng minh thu nhập cá nhân,...</label>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" >Ảnh chụp giấy tờ 1 </label>
                                    <div class="input-field">
                                        <input type="file" name="image-loan1">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" >Ảnh chụp giấy tờ 2 </label>
                                    <div class="input-field">
                                        <input type="file"  name="image-loan2" >
                                    </div>
                                </div>


                            </div>
                            <div class="d-grid  mt-4 col-md-10"><button class="btn btn-primary" type="submit">Xác nhận gửi</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

