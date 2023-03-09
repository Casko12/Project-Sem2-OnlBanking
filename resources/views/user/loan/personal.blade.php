@extends("user.layout")
@section("main_content")
    <section class="loan-deatils-area bg_disable pt-130 pb-120"style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                        <ul>
                            <li class=" complete  mt-0"><a href="{{url("/loan")}}">
                                    <div class="number"><i class="icon_check"></i> <span>1</span></div> Chi tiết khoản vay
                                </a>
                            </li>
                            <li class="active"><a href="{{url("/personal")}}">
                                    <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                    Thông tin cá nhân
                                </a>
                            </li>
                            <li><a href="{{url("/documantUp")}}">
                                    <div class="number"><i class="icon_check"></i> <span>3</span></div>
                                    Tải lên tài liệu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="loan-details-widget bg_white">
                        <form action="{{url("/documantUp")}}">
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
                                    <label class="label" for="dob-d">Ngày sinh*</label>
                                    <input id="birth" class="form-control" type="date" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="emailName">Email</label>
                                    <input class="form-control" type="email" id='emailName'
                                           placeholder="loan@gmail.com" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="label" for="inputPhoneNumber">Số điện thoại*</label>
                                    <input id="inputPhoneNumber" class="form-control w-100" type="number">
                                </div>

                                <div class="col-md-12">
                                    <label class="label" for="pAddress">Địa chỉ*</label>
                                    <input id="pAddress" class="form-control" type="text">
                                </div>


                            </div>
                            <div class="row mt-60">
                                <div class="col-md-12">
                                    <div class="nav-btn d-flex flex-wrap justify-content-between">
                                        <a href="{{url("/loan")}}"
                                           class=" prev-btn theme-btn-primary_alt theme-btn"><i
                                                class="arrow_left"></i>Quay lại
                                        </a>
                                        <button type="submit"
                                                class=" next-btn theme-btn-primary_alt theme-btn ">Tiếp theo<i
                                                class="arrow_right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
