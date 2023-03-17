@extends("layouts.layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Lịch sử giao dịch
@endsection

@section("main_content")
    <div class="col-lg-9">
        <h2 class="fw-400 mb-3">Lịch sử giao dịch</h2>

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
                                <input id="dateRange" type="text" class="form-control" placeholder="Date Range">
                                <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <!-- All Filters Link
                        ========================= -->
                        <div class="col-auto d-flex align-items-center me-auto form-group" data-bs-toggle="collapse"> <a class="btn-link" data-bs-toggle="collapse" href="#allFilters" aria-expanded="false" aria-controls="allFilters">All Filters<i class="fas fa-sliders-h text-3 ms-1"></i></a> </div>

                        <!-- Statements Link
                        ========================= -->
                        <div class="col-auto d-flex align-items-center ms-auto">
                            <div class="dropdown"> <a class="text-muted btn-link" href="#" role="button" id="statements" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-download text-3 me-1"></i>Statements</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="statements"> <a class="dropdown-item" href="#">CSV</a> <a class="dropdown-item" href="#">PDF</a> </div>
                            </div>
                        </div>

                        <!-- All Filters collapse
                        ================================ -->
                        <div class="col-12 collapse" id="allFilters">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="allTransactions" name="allFilters" checked>
                                <label class="form-check-label" for="allTransactions">All Transactions</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="paymentsSend" name="allFilters">
                                <label class="form-check-label" for="paymentsSend">Payments Send</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="paymentsReceived" name="allFilters">
                                <label class="form-check-label" for="paymentsReceived">Payments Received</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="refunds" name="allFilters">
                                <label class="form-check-label" for="refunds">Refunds</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="withdrawal" name="allFilters">
                                <label class="form-check-label" for="withdrawal">Withdrawal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="deposit" name="allFilters">
                                <label class="form-check-label" for="deposit">Deposit</label>
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
            <h3 class="text-5 fw-400 d-flex align-items-center px-4 mb-4">All Transactions</h3>
            <!-- Title
            =============================== -->
            <div class="transaction-title py-2 px-4">
                <div class="row">
                    <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
                    <div class="col col-sm-7">Description</div>
                    <div class="col-auto col-sm-2 d-none d-sm-block text-center">Status</div>
                    <div class="col-3 col-sm-2 text-end">Amount</div>
                </div>
            </div>
            <!-- Title End -->

            <!-- Transaction List
            =============================== -->
            <div class="transaction-list">
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">16</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-bs-toggle="tooltip" title="In Progress"><i class="fas fa-ellipsis-h"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">15</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+ $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">04</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $106</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">28</span> <span class="d-block text-1 fw-300 text-uppercase">MAR</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Refund</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+ $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">28</span> <span class="d-block text-1 fw-300 text-uppercase">MAR</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Payment Sent</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-danger" data-bs-toggle="tooltip" title="Cancelled"><i class="fas fa-times-circle"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">16</span> <span class="d-block text-1 fw-300 text-uppercase">FEB</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
                <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                    <div class="row align-items-center flex-row">
                        <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">15</span> <span class="d-block text-1 fw-300 text-uppercase">FEB</span> </div>
                        <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                        <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                        <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+ $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                    </div>
                </div>
            </div>
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
                                        <div class="text-8 fw-500 text-white my-4">VNĐ 1,000,000</div>
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
                                        <p class="d-flex align-items-center fw-500 mb-0">Số tiền <span class="text-3 ms-auto">VNĐ 1,000,000</span></p>
                                        <hr class="mb-4 mt-2">
                                        <ul class="list-unstyled">
                                            <li class="fw-500">Người nhận:</li>
{{--                                            nếu là giao dịch Chuyển tiền vào thì đổi "Người nhận" thành "Người gửi--}}
                                            <li class="text-muted">Hà Hoàng Hưng</li>
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


