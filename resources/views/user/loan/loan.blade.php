@extends("user.layout")
@section("title")
    Khoản vay
@endsection
@section("main_content")
    <section class="loan-deatils-area bg_disable pt-130 pb-120" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                        <ul>
                            <li class="active mt-0"><a href="{{url("/loan")}}">
                                    <div class="number"><i class="icon_check"></i> <span>1</span></div>Chi tiết khoản vay
                                </a>
                            </li>
                            <li class=""><a href="{{url("/personal")}}">
                                    <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                Thông tin cá nhân
                                </a>
                            </li>
                            <li><a href="{{url("/documantUp")}}">
                                    <div class="number"><i class="icon_check"></i> <span>3</span></div>
                                    Tải lên tài liệu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="loan-details-widget bg_white">
                        <form action="{{url("/personal")}}">
                            <div class="row mb-35 gy-4">
                                <div class="col-lg-3 col-md-6">
                                    <input class="select-loan-type-radio" name="select-loan-type" type="radio"
                                           id="Personal_loan">
                                    <label for="Personal_loan" class="loan-type">
                                        <img src="/user/html/img/apply-loan/icon-4.1.png" alt="icon">
                                        <img src="/user/html/img/apply-loan/icon-4.2.png" alt="icon">
                                        <span>Vay tiêu dùng</span>
                                    </label>

                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <input class="select-loan-type-radio" name="select-loan-type" type="radio"
                                           id="Home_loan">
                                    <label for="Home_loan" class="loan-type">
                                        <img src="/user/html/img/apply-loan/icon-5.1.png" alt="icon">
                                        <img src="/user/html/img/apply-loan/icon-5.2.png" alt="icon">
                                        <span>Vay mua nhà</span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <input class="select-loan-type-radio" name="select-loan-type" type="radio"
                                           id="Buisness_loan">
                                    <label for="Buisness_loan" class="loan-type">
                                        <img src="/user/html/img/apply-loan/icon-6.1.png" alt="icon">
                                        <img src="/user/html/img/apply-loan/icon-6.2.png" alt="icon">
                                        <span>Vay trả nợ</span>
                                    </label>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <input class="select-loan-type-radio" name="select-loan-type" type="radio"
                                           id="Car_loan">
                                    <label for="Car_loan" class="loan-type">
                                        <img src="/user/html/img/apply-loan/icon-7.1.png" alt="icon">
                                        <img src="/user/html/img/apply-loan/icon-7.2.png" alt="icon">
                                        <span>Vay mua ô tô</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label class="label" for="loandetails01">Chọn loại tài chính của bạn</label>
                                    <select class="w-100" id="loandetails01">
                                        <option value="Debt-Financing">Nợ tài chính</option>
                                        <option value="Equity-Finance">Tài chính vốn chủ sở hữu</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="label" for="loandetails02">Chọn ngân hàng bạn ưa thích
                                    </label>
                                    <select class=" w-100" id="loandetails02">
                                        <option value="Individual-Banking">Ngân hàng cá nhân</option>
                                        <option value="Business-Banking">Ngân hàng thương mại</option>
                                        <option value="Digital-Banking">Ngân hàng số</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="label" for="loan-amount">Số tiền bạn vay</label>
                                    <div class="input-field">
                                        <span>$</span>
                                        <input type="number" id="loan-amount" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="label mb-4">Thời gian</label>

                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">12 tháng</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">18 tháng</label>
                                    </div>

                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">24 tháng</label>
                                    </div>

                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio4" value="option4">
                                        <label class="form-check-label" for="inlineRadio4">36 tháng</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-30">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio5" value="option5">
                                        <label class="form-check-label" for="inlineRadio5">48 tháng</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row  mt-60">
                                <div class="col-md-12">
                                    <div class="nav-btn d-flex justify-content-end">
                                        <button class=" theme-btn-primary_alt theme-btn next-btn"
                                                type="submit">Tiếp theo<i class="arrow_right"></i></button>
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
