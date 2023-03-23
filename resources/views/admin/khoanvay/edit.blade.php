@extends("user.layout")
@section("title")
    Chỉnh sửa lãi suất khoản vay
@endsection
@section("main_content")

    <div style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Chỉnh sửa lãi suất khoản vay</h3>
        <div class="loan-details-widget bg_white">
            <form action="document-upload.html">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                        <div class="mb-3">
                            <label class="label" for="fName">Kì hạn<span class="text-danger">*</span></label>
                            <input id='fName' class="form-control" type="text" required>
                        </div>
                        <div class="mb-3">
                            <label class="label" for="lName">Lãi suất<span class="text-danger">*</span></label>
                            <input id='lName' class="form-control" type="number" required>
                        </div>
                        <div class="mb-3">
                            <label class="label" for="lName">Trạng thái<span class="text-danger">*</span></label>
                            <input id='lName' class="form-control" type="number" required>
                        </div>
                        <div class="mb-3">
                            <div class="nav-btn d-flex flex-wrap justify-content-between">
                                <button type="submit" class="theme-btn" style="color: white"><a href="{{url("/admin/danhsach-khoanvay")}}" class=theme-btn" style="color: white"><i class="arrow_left"></i>Trở lại
                                    </a></button>
                                <button type="submit" class="theme-btn" style="color: white">Xác nhận <i class="arrow_right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
