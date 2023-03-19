@extends("layouts.layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Lịch sử giao dịch
@endsection

@section("main_content")
    <div class="col-lg-9">
        <h2 class="fw-400 mb-3">Lịch sử giao dịch:</h2> <h1>{{$account->account_number}}</h1>

        <!-- Filter
        ============================================= -->
        <div class="row">
            <div class="col mb-2">
                <form id="filterTransactions" method="post">
                    <div class="row g-3 mb-3">
                        <!-- Date Range
                        ========================= -->
                        <div class="col-sm-6 col-md-5">
                            <div class="position-relative">
                                <input id="dateRange" type="text" class="form-control" placeholder="Chọn khoảng thời gian">
                                <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <!-- All Filters Link
                        ========================= -->
                        <div class="col-auto d-flex align-items-center me-auto form-group" data-bs-toggle="collapse"> <a class="btn-link" data-bs-toggle="collapse" href="#allFilters" aria-expanded="false" aria-controls="allFilters">Mở rộng<i class="fas fa-sliders-h text-3 ms-1"></i></a> </div>

                        <!-- Statements Link
                        ========================= -->
                        <div class="col-auto d-flex align-items-center ms-auto">
                            <div class="dropdown"> <a class="text-muted btn-link" href="#" role="button" id="statements" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-download text-3 me-1"></i>Xuất ra file</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="statements"> <a class="dropdown-item" href="#">CSV</a> <a class="dropdown-item" href="#">PDF</a> </div>
                            </div>
                        </div>

                        <!-- All Filters collapse
                        ================================ -->
                        <div class="col-12 collapse" id="allFilters">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="allTransactions" name="allFilters" checked>
                                <label class="form-check-label" for="allTransactions">Tất cả giao dịch</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="paymentsSend" name="allFilters">
                                <label class="form-check-label" for="paymentsSend">Chuyển tiền đi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="paymentsReceived" name="allFilters">
                                <label class="form-check-label" for="paymentsReceived">Chuyển tiền vào</label>
                            </div>
                        </div>
                        <!-- All Filters collapse End -->
                    </div>
                </form>
            </div>
        </div>
        <!-- Filter End -->

        <!-- All Transactions
        ============================================= -->
        <div class="bg-white shadow-sm rounded py-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center px-4 mb-4">Tất cả giao dich</h3>
            <!-- Title
            =============================== -->
            <div class="transaction-title py-2 px-4">
                <div class="row">
                    <div class="col-2 col-sm-1 text-center"><span class="">Ngày</span></div>
                    <div class="col col-sm-7">Mô tả</div>
                    <div class="col-auto col-sm-2 d-none d-sm-block text-center">Trạng thái</div>
                    <div class="col-3 col-sm-2 text-end">Số tiền</div>
                </div>
            </div>
            <!-- Title End -->

            <!-- Transaction List
            =============================== -->
            @foreach($data as $data)
            <div class="transaction-list" id="transaction_id" onclick="detailHis()" name="transaction_id" value="{{$data->id}}">


                <div class="transaction-item px-4 py-3" data-bs-toggle="modal"  data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">16</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">{{$data->receive_id}}</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-bs-toggle="tooltip" title="In Progress"><i class="fas fa-ellipsis-h"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap" id="dataAmount" value="{{$data->amount}}">- {{$data->amount}}</span> <span class="text-2 text-uppercase">(VNĐ)</span> </div>
                    </div>
                </div>


            </div>
            @endforeach

            <!-- Transaction List End -->

            <!-- Transaction Item Details Modal
            =========================================== -->
            <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row g-0">
                                <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-start py-4">
                                    <div class="my-auto text-center">
                                        <div class="text-17 text-white my-3"><i class="fas fa-building"></i></div>
                                        <h3 class="text-4 text-white fw-400 my-3">Vietcombank</h3>
                                        <div class="text-8 fw-500 text-white my-4">{{$data->amount}}</div>
                                        <p class="text-white">15 Tháng 3, 2021</p>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h5 class="text-5 fw-400 m-3">Chi tiết giao dịch
                                        <button type="button" class="btn-close text-2 float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </h5>
                                    <hr>
                                    <div class="px-3">
                                        <ul class="list-unstyled">
                                            <li class="mb-2">Loại giao dịch <span class="float-end text-3">Chuyển tiền đi</span></li>
                                        </ul>
                                        <hr class="mb-2">
                                        <p class="d-flex align-items-center fw-500 mb-0">Số tiền <span class="text-3 ms-auto" id="amount"></span></p>
                                        <hr class="mb-4 mt-2">
                                        <ul class="list-unstyled">
                                            <li class="fw-500">Người nhận:</li>
{{--                                            nếu là giao dịch Chuyển tiền vào thì đổi "Người nhận" thành "Người gửi--}}
                                            <li class="text-muted">{{$data->receive_id}}</li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li class="fw-500">Mã giao dịch:</li>
                                            <li class="text-muted">26566689645685976589</li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li class="fw-500">Mô tả:</li>
                                            <li class="text-muted">Chuyển tiền học</li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li class="fw-500">Trạng thái:</li>
                                            <li class="text-muted">Thành công<span class="text-success text-3 ms-1"><i class="fas fa-check-circle"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transaction Item Details Modal End -->

            <!-- Pagination
            ============================================= -->
            <ul class="pagination justify-content-center mt-4 mb-0">
                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
                <li class="page-item"><a class="page-link" href="#">15</a></li>
                <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
            </ul>

            <!-- Paginations end -->

        </div>
        <!-- All Transactions End -->
    </div>
@endsection
@section("custom_js")
    <script>
    $(function() {
        'use strict';

        // Date Range Picker
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();
            function cb(start, end) {
                $('#dateRange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            $('#dateRange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            cb(start, end);
        });
    });
</script>
    <script>
        function detailHis(){
            var his_id = $("#transaction_id").val()
            var his_amount = $("#dataAmount").val()
            $.ajax({
                url: "/detailHis/"+"?id="+his_id,
                method:"get",
                success: function (rs) {
                    $("#amount").text(his_amount)
                }
            })
        }
    </script>
@endsection

