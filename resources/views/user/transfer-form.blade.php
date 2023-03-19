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
                        <div class="col-4 step active">
                            <div class="step-name">Thông tin chuyển khoản</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Xác nhận chuyển khoản</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Trạng thái giao dịch</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a> </div>
                    </div>
                </div>
            </div>
            <!-- Steps Progress bar End -->

            <h2 class="fw-400 text-center mt-3">Chuyển Khoản Qua Số Tài Khoản</h2>
            <p class="lead text-center mb-4">An toàn, Nhanh chóng, Thuận tiện.</p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 fw-400 mb-3 mb-sm-4">Thông tin chuyển khoản</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Form
                        ============================ -->
                        <form id="form-send-money" action="{{url("/transfer-confirm",["account"=>$account->id])}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="bankID" class="form-label">Chọn Ngân Hàng</label>
                                <select class="form-select" id="bank_id" aria-label="Default select example">
                                    <option selected>Vui Lòng Chọn Ngân Hàng</option>
                                    @foreach($bank as $b)
                                    <option name="bank_id" value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                </select></div>
                            <div class="mb-3">
                                <label for="recieverID" class="form-label">Số Tài Khoản</label>
                                <div class="input-group">
                                    <input type="text" required class="form-control" data-bv-field="ReceiverID" id="receiverID" name="account" placeholder="Số tài khoản">

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="recieverID" class="form-label">Tên Tài Khoản</label>
                                <input type="button" onclick="findName()" class="form-control" value="" id="userName">

                            </div>
                            <div class="mb-3">
                                <label for="recipientGets" class="form-label">Số tiền</label>
                                <div class="input-group">
                                    <span class="input-group-text">VNĐ</span>
                                    <input type="number" required class="form-control" name="money" data-bv-field="recipientGets" id="recipientGets" min="0" onkeyup="showMoney()"  placeholder="">
                                    <span class="input-group-text p-0">
                    </span>
                                </div>
                            </div>
                            <div class="mb-4 mb-sm-5">
                                <label for="description" class="form-label">Nội dung chuyển khoản</label>
                                <textarea class="form-control" rows="4" name="description"  required placeholder="Nhập nội dung chuyển khoản"></textarea>
                            </div><hr>

                            <p >Số tiền bằng chữ<span class="float-end" id="totalMoney" ></span></p>
                            <div class="d-grid"><button type="submit"  class="btn btn-primary">Continue</button></div>
                        </form>
                        <!-- Send Money Form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->
@endsection
@section('custom_js')
    <script>
    function findName() {
        var bank = $( "#bank_id" ).val();
        var account = $("#receiverID").val();
            $.ajax({
            url:"/findname"+"?bank_id="+bank+"&account="+account,
            method:"get",
            success: function (rs){
            $("#userName").val(rs.user)
            }
         })
        }
    function showMoney(){
        var phi = $("#phi").val()
        var money = $("#recipientGets").val()
        var total =
            $.ajax({
            url:"/showmoney",
            method:"get",
            success: function (rs){
            var totalmoney = $("#totalMoney").text(money)
               }
            })
    }

    </script>
@endsection
