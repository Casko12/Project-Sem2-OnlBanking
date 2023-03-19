@extends("layouts.header-footer-layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Thông tin chuyển khoản
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
                            <span class="step-dot"></span> </div>
                        <div class="col-4 step complete">
                            <div class="step-name">Xác nhận chuyển khoản</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="step-dot"></span> </div>
                        <div class="col-4 step complete">
                            <div class="step-name">Trạng thái giao dịch</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="step-dot"></span> </div>
                    </div>
                </div>
            </div>
            <h2 class="fw-400 text-center mt-3 mb-4">Giao dịch chuyển khoản</h2>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <!-- Send Money Success
                    ============================================= -->
                    <div class="bg-white text-center shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <div class="my-4">
                            <p class="text-success text-20 lh-1"><i class="fas fa-check-circle"></i></p>
                            <p class="text-success text-8 fw-500 lh-1">Thành công!</p>
                            <p class="lead">Mã giao dịch: tyyuh6wwmcij</p>
                        </div>
                        <p class="text-3 mb-4">Bạn đã chuyển thành công số tiền <span class="text-4 fw-500">{{number_format($reveice["amount"])}}</span> VNĐ tới <span class="fw-500">{{$user->name}}</span>, chi tiết xem tại <a class="btn-link" href="#">Lịch sử giao dịch</a>.</p>
                        <div class="d-grid"><button class="btn btn-primary">Xác nhận</button></div>
                        <a class="text-3 d-inline-block btn-link mt-4" href="#"><i class="fas fa-print"></i> In</a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->
@endsection
