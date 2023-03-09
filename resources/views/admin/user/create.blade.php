@extends("user.layout")
@section("title")
    Tạo mới người dùng
@endsection
@section("main_content")

    <div style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Tạo mới người dùng</h3>

        <div class="loan-details-widget bg_white">
            <form action="document-upload.html">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <label class="label" for="fName">Họ*</label>
                        <input id='fName' class="form-control" type="text" required>
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="lName">Tên*</label>
                        <input id='lName' class="form-control" type="text" required>
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="dob-d">Ngày Sinh*</label>
                        <input id="birth" class="form-control" type="date" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label" for="emailName">Email</label>
                        <input class="form-control" type="email" id='emailName'
                               placeholder="examplename@example.com" required>
                    </div>

                    <div class="col-md-12">
                        <label class="label" for="pAddress">Địa chỉ*</label>
                        <input id="pAddress" class="form-control" type="text">
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="inputPhoneNumber">Số điện thoại*</label>
                        <input id="inputPhoneNumber" class="form-control w-100" type="number">
                    </div>
                    <div class="col-md-6">
                        <label class="label" for="inputPhoneNumber">Trạng thái*</label>
                        <input id="inputPhoneNumber" class="form-control w-100" type="number">
                    </div>



                </div>
                <div class="row mt-60">
                    <div class="col-md-12">
                        <div class="nav-btn d-flex flex-wrap justify-content-between">
                            <button type="submit" class="theme-btn" style="color: white"><a href="loan-details.html" class=theme-btn" style="color: white"><i class="arrow_left"></i>Trở lại
                                </a></button>

                            <button type="submit" class="theme-btn" style="color: white">Đăng kí <i class="arrow_right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
