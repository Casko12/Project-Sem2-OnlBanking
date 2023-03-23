@extends("layouts.layout2")
<base href="{{ url("/") }}"/>

@section("title")
    Khoản vay
@endsection
@section("main_content")
    <div class="bg-white shadow-sm rounded p-4 mb-4"style="margin-top: 20px">
        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Khoản vay</h3>
        <hr class="mx-n4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="loan-details-widget bg_white">
                        <form method="post" action="{{url("/createloans")}}">
                            <div class="row gy-4">
                                <div class="col-md-10">
                                    <div class="mb-3">
                                        <label for="bankID" class="form-label">Chọn Tài Khoàn Nhận Tiền</label>
                                        <select class="form-select" name="account_id" id="account_id" aria-label="Default select example">
                                            <option selected>Vui Lòng Chọn Tài Khoàn Nhận Tiền</option>
                                            @foreach($allaccount as $aa)
                                                <option name="account_id" id="account_id" value="{{$aa->id}}">{{$aa->account_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Tên Hồ Sơ</label>
                                    <div class="input-field">
                                        <span></span>
                                        <input type="text" name="tenhoso" id="tenhoso" class="form-control" placeholder="vay mua nhà, tiêu dùng...">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Lý do vay tiền</label>
                                    <div class="input-field">
                                        <span></span>
                                        <input type="text" name="description" id="description" class="form-control" placeholder="vay mua nhà, tiêu dùng...">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Số tiền bạn vay</label>
                                    <div class="input-field">
                                        <input type="number"  name="amount" id="amount" class="form-control" placeholder="$" onkeyup="laiSuat()">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    @foreach($banglai as $bl)
                                        <div class="form-check form-check-inline mr-30">
                                            <input class="form-check-input" type="radio" onclick="laiSuat()" name="thoihan"
                                                   value="{{$bl->id}}" id="thoihan">
                                            <label class="form-check-label" for="inlineRadio1">{{$bl->ky_han}} tháng</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-10">

                                    <div class="row align-items-center flex-row">
                                        <div class="col-6 col-sm-4 text-left"> <span class="d-block text-4 fw-300" id="showThoihan">1 Tháng</span> <span class="d-block text-1 fw-500 text-uppercase" id="date_end">{{date_format(date_create(now()->addMonth()),"d-m-Y")}}</span> </div>
                                        <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap" id="dataAmount" value="">Lãi Suất </span> <span class="text-2 text-uppercase" id="lai_suat">6.5%/NĂM</span> </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label class="label" for="loan-return">Số tiền cần phải thanh toán khi đến hạn: </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="label" for="loan-return" style="float: right"><span id="tienlai">0 VND</span></label>
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
@section("custom_js")
    <script>
        function laiSuat(){
            var thoihan = $("#thoihan:checked").val()
            var amount = $("#amount").val()
            $.ajax({
                url:"/loans/"+"?thoihan="+thoihan+"&amount="+amount,
                method:"get",
                success:function (rs){
                    $("#showThoihan").text(rs.kyhan)
                    $("#date_end").text(rs.date_end)
                    $("#lai_suat").text(rs.lai)
                    $("#tienlai").text(rs.total_money)
                }
            })
        }
    </script>
    <script>
        function addSaving(){
            var tenhoso = $("#tenhoso").val()
            var thoihan = $("#thoihan:checked").val()
            var amount = $("#amount").val()
            var description = $("#description").val()
            var account_id = $("#account_id").val()
            $.ajax({
                url:"/addloans"+"?tenhoso="+tenhoso+"&thoihan="+thoihan+"&amount="+amount+"&descruption="+description+"&?account_id="+account_id,
                method:"get"
            })
        }
    </script>
@endsection

