@extends("layouts.header-footer-layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Xác nhận chuyển khoản
@endsection
@section("main_content")
    <!-- Content
    ============================================= -->
        <div class="container">
            <!-- Steps Progress bar -->
            <div class="row mt-4 mb-5">
                <div class="col-lg-11 mx-auto">
                    <div class="row widget-steps">
                        <div class="col-4 step complete">
                            <div class="step-name">Thông tin chuyển khoản</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="javascript:window.history.back();" class="step-dot"></a> </div>
                        <div class="col-4 step active">
                            <div class="step-name">Xác nhận chuyển khoản</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Trạng thái giao dịch</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="" class="step-dot"></a> </div>
                    </div>
                </div>
            </div>
            <h2 class="fw-400 text-center mt-3">Xác Nhận Chuyển Khoản</h2>
            <p class="lead text-center mb-4">Bạn đang chuyển khoản tới <span class="fw-500">{{$user->name}}</span></p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    @if($reveice["amount"]<5000000)
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 fw-400 mb-3 mb-sm-4">Xác thực bằng PIN</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Confirm
                        ============================================= -->
                        <form id="form-send-money" action="{{url("/transfer-success")}}" method="get">
                            @csrf
                            <div class="mb-1">
                                <label for="recieverID" class="form-label">Nhập mã PIN</label>
                                <div class="input-group">
                                    <div class="pin-wrapper">
                                        <input name="pin1" type="password"  inputmode="number" maxlength="1" class="pin-input">
                                        <input name="pin2" type="password"  inputmode="number" maxlength="1" class="pin-input">
                                        <input name="pin3" type="password"  inputmode="number" maxlength="1" class="pin-input">
                                        <input name="pin4" type="password"  inputmode="number" maxlength="1" class="pin-input">
                                    </div>
                                </div>
                            </div>
                            <hr class="mx-n3 mx-sm-n5 mb-3 mb-sm-4">
                            <h3 class="text-5 fw-400 mb-3 mb-sm-4">Xác thực số tiền và nội dung</h3>
                            <hr class="mx-n3 mx-sm-n5 mb-4">

                            <p class="mb-1">Số tiền <span class="text-3 float-end">{{number_format($reveice["amount"])}} VNĐ</span></p>
                            <p class="mb-1">Nội dung chuyển khoản <span class="text-3 float-end">{{$reveice["description"]}}</span></p>

                            <hr>
                            <p class="text-4 fw-500">Số tiền bằng chữ<span class="float-end">{{$reveice["amount"]}}</span></p>
                            <div class="btn-group" style="width:100%">
                                <button class="btn btn-outline-primary" onclick="history.go(-1);">Quay lại</button>
                                <button class="btn btn-outline-primary" type="submit" >Tiếp tục</button>
                            </div>

                        </form>
                        <!-- Send Money Confirm end -->
                    </div>
                    @else
                        <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                            <h3 class="text-5 fw-400 mb-3 mb-sm-4">Xác thực bằng OTP</h3>
                            <hr class="mx-n3 mx-sm-n5 mb-4">
                            <!-- Send Money Confirm
                            ============================================= -->
                            <form id="form-send-money" action="{{url("/transfer-success")}}" method="get">
                                @csrf
                                <div class="mb-1">
                                    <label for="recieverID" class="form-label">Nhập mã OTP</label>
                                    <p>Mã xác nhận đã được gửi về email của bạn!</p>
                                    <div class="input-group">
                                        <div class="pin-wrapper">
                                            <input name="pin1" type="text" inputmode="number" maxlength="1" class="pin-input">
                                            <input name="pin2" type="text" inputmode="number" maxlength="1" class="pin-input">
                                            <input name="pin3" type="text" inputmode="number" maxlength="1" class="pin-input">
                                            <input name="pin4" type="text" inputmode="number" maxlength="1" class="pin-input">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mx-n3 mx-sm-n5 mb-3 mb-sm-4">
                                <h3 class="text-5 fw-400 mb-3 mb-sm-4">Xác thực số tiền và nội dung</h3>
                                <hr class="mx-n3 mx-sm-n5 mb-4">

                                <p class="mb-1">Số tiền <span class="text-3 float-end">{{number_format($reveice["amount"])}} VNĐ</span></p>
                                <p class="mb-1">Nội dung chuyển khoản <span class="text-3 float-end">{{$reveice["description"]}}</span></p>

                                <hr>
                                <p class="text-4 fw-500">Số tiền bằng chữ<span class="float-end">{{$reveice["amount"]}}</span></p>
                                <div class="btn-group" style="width:100%">
                                    <button class="btn btn-outline-primary" onclick="history.go(-1);">Quay lại</button>
                                    <button class="btn btn-outline-primary" type="submit" >Tiếp tục</button>
                                </div>

                            </form>
                            <!-- Send Money Confirm end -->
                        </div>
                    @endif
                </div>
            </div>
        </div>
    <!-- Content end -->
@endsection
<script>
    var docTien = new DocTienBangChu();
</script>
