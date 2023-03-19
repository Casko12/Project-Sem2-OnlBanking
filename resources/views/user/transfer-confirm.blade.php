@extends("layouts.header-footer-layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Xác nhận chuyển khoản
@endsection
@section("main_content")
    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
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
                            <a href="send-money.html" class="step-dot"></a> </div>
                        <div class="col-4 step active">
                            <div class="step-name">Xác nhận chuyển khoản</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Thành công</div>
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
                        <h3 class="text-5 fw-400 mb-3 mb-sm-4">Xác thực bằng PIN</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Confirm
                        ============================================= -->
                        <form id="form-send-money" action="{{url("/transfer-success",["account"=>$id])}}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="recieverID" class="form-label">Nhập mã PIN</label>
                                <div class="input-group">
                                    <input name="pin" type="password" inputmode="number" maxlength="4"/>
                                </div>
                            </div>
                            <hr class="mx-n3 mx-sm-n5 mb-3 mb-sm-4">
                            <h3 class="text-5 fw-400 mb-3 mb-sm-4">Xác thực Số tiền và Nội dung</h3>
                            <hr class="mx-n3 mx-sm-n5 mb-4">

                            <p class="mb-1">Số tiền <span class="text-3 float-end">{{number_format($reveice["amount"])}} VNĐ</span></p>
                            <p class="mb-1">Nội dung chuyển khoản <span class="text-3 float-end">{{$reveice["description"]}}</span></p>

                            <hr>
                            <p class="text-4 fw-500">Số tiền bằng chữ<span class="float-end">{{$reveice["amount"]}}</span></p>
                            <div class="d-grid"><button type="submit" class="btn btn-primary">Send Money</button></div>

                        </form>
                        <!-- Send Money Confirm end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->
@endsection
