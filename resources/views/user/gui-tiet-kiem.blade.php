@extends("layouts.layout2")
<base href="{{ url("/") }}"/>

@section("title")
    Gửi tiết kiệm
@endsection
@section("main_content")
    <div class="bg-white shadow-sm rounded p-4 mb-4" style="margin-top: 20px">
        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Gửi tiết kiệm</h3>
        <hr class="mx-n4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="loan-details-widget bg_white">
                        <form method="post" action="{{url("/createsave")}}">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Từ tài khoản</label>
                                    <div class="input-field">
                                        <span> @foreach($allaccount as $item)<a>Tài khoản số: {{$item->account_number}}</a> Số Dư : <a>{{number_format($item->balance)}} VNĐ</a> @endforeach</span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-name">Ten so</label>
                                    <div class="input-field">
                                        <input type="text" name="tenso" id="tenso" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-amount">Số tiền muốn gửi</label>
                                    <div class="input-field">
                                        <input type="number"  name="amount" id="amount" min="1" class="form-control" placeholder="$" onkeyup="laiSuat()">
                                    </div>
                                </div>
                                <div class="col-md-10">
{{--                                    <select class="form-select" id="thoihan" onclick="laiSuat()" aria-label="Default select example">--}}
{{--                                        <option selected>Vui Lòng Chọn Kỳ Hạn</option>--}}
{{--                                        @foreach($banglai as $bl)--}}
{{--                                            <option name="thoihan" value="{{$bl->id}}" >{{$bl->ky_han}} tháng</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
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
                                                <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap" id="dataAmount" value="">Lãi Suất </span> <span class="text-2 text-uppercase"id="lai_suat">5.9%/Nam</span> </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label class="label" for="loan-return" >Số tiền lãi là: </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="label" for="loan-return" style="float: right"><span id="tienlai">0 VND</span></label>
                                </div>
                                <div class="col-md-10">
                                    <label class="label" for="loan-name">Ghi Chu</label>
                                    <div class="input-field">
                                        <input type="text" name="description" id="description" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!-- Button trigger modal -->


                            <!-- Modal -->

                            <div class="d-grid  mt-4 col-md-10">
                                <button type="button" class="btn btn-primary" onclick="addSaving()" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Xác nhận gửi
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nhập Mã Pin</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-1">
                                                    <label for="recieverID" class="form-label">Nhập mã PIN</label>
{{--                                                    PIN input--}}
                                                    <div class="pin-wrapper">
                                                        <input type="password" name="pin1" data-role="pin" maxlength="1" class="pin-input">
                                                        <input type="password" name="pin2" data-role="number" maxlength="1" class="pin-input">
                                                        <input type="password" name="pin3" data-role="number" maxlength="1" class="pin-input">
                                                        <input type="password" name="pin4" data-role="number" maxlength="1" class="pin-input">

                                                    </div>
{{--                                                    PIN input end--}}
                                                    <div class="pin"></div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                url:"/saving/"+"?thoihan="+thoihan+"&amount="+amount,
                method:"get",
                success:function (rs){
                    $("#showThoihan").text(rs.kyhan)
                    $("#date_end").text(rs.date_end)
                    $("#lai_suat").text(rs.lai)
                    $("#tienlai").text(rs.tienlai)
                }
            })
        }
    </script>
    <script>
        function addSaving(){
            var tenso = $("#tenso").val()
            var thoihan = $("#thoihan:checked").val()
            var amount = $("#amount").val()
            var description = $("#description").val()
            $.ajax({
                url:"/addsave"+"?tenso="+tenso+"&thoihan="+thoihan+"&amount="+amount+"&descruption="+description,
                method:"get"
            })
        }
    </script>
@endsection

