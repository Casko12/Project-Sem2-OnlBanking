@extends("layouts.layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Trang người dùng
@endsection

@section("main_content")
    <div class="col-lg-9">

        <!-- Personal Details
        ============================================= -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach($allaccount as $item)

                    <div class="carousel-item @if($loop->first)active @endif">
                        <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                            <h2 class="text-7 fw-400">Tài khoản số: {{$item->account_number}}</h2>
                            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                            <h3 class="text-9 fw-400">VNĐ {{number_format($item->balance)}}</h3>
                            <p class="mb-2 text-muted opacity-8">Số dư tài khoản chính</p>
                            <hr class="mx-n3">

                            <div class="multi-button">
                                <button><i class="fas fa-coins"></i> Tiết kiệm</button>
                                <button><i class="fas fa-hand-holding-usd"></i> Chuyển khoản</button>
                                <button><i class="fas fa-file-invoice-dollar"></i></i> Lịch sử giao dịch</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" style="color: red" aria-hidden="true"><<<</span>
                <span class="visually-hidden" >Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon"  style="color: red" aria-hidden="true">>>></span>
                <span class="visually-hidden-focusable">Next</span>
            </button>
        </div>


        <!-- Account Settings
        ============================================= -->
        <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Tuỳ chỉnh<a href="#edit-account-settings" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
            <hr class="mx-n4 mb-4">
            <div class="row gx-3 align-items-center">
                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ngôn ngữ:</p>
                <p class="col-sm-9 text-3">Tiếng Việt</p>
            </div>
            <div class="row gx-3 align-items-center">
                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Time Zone:</p>
                <p class="col-sm-9 text-3">(GMT+07:00) Bankok, Hanoi, Jakarta</p>
            </div>
            <div class="row gx-3 align-items-center">
                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Trạng thái tài khoản:</p>
                @if($account->status ==1)
                    <p class="col-sm-9 text-3"><span class="bg-success text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-check-circle"></i> Active</span></p>
                @elseif($account->status ==2)
                    <p class="col-sm-9 text-3"><span class="bg-info text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-exclamation-circle"></i> Pending</span></p>
                @else
                    <p class="col-sm-9 text-3"><span class="bg-danger text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-times-circle"></i> Deactive</span></p>
                @endif
            </div>
        </div>
    </div>
@endsection
<script>
    function changeAccount(){
        var changer = $( "#changerAccount" ).val();
        $.ajax({
            url:"/changeAccount/"+"?account_number="+changer,
            method: "get",
            success: function (rs) {
                $("#balance").val(rs.balance)
            }
        })
    }
</script>


