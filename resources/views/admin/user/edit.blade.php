@extends("user.layout")
@section("title")
    Chỉnh sửa người dùng
@endsection
@section("main_content")

    <div style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Chỉnh sửa nhân viên</h3>

        <div class="loan-details-widget bg_white">
            <form action="{{url("admin/edituser",["user"=>$user->id])}}" method="post">
                @csrf
                <div class="row gy-4">
                    <div class="col-md-12">
                        <label class="label" for="fName">Ho va Ten*</label>
                        <input id='fName' name="name" class="form-control" value="{{$user->name}}" type="text" required>
                    </div>


                    <div class="col-md-6">
                        <label class="label" for="dob-d">Ngày Sinh*</label>
                        <input id='birthday' name="birthday" class="form-control" value="{{$user->birthday}}" type="date" required>

                    </div>
                    <div class="col-md-6">
                        <label class="label" for="emailName">Email</label>
                        <input class="form-control" name="email" type="email" value="{{$user->email}}" id='emailName'
                               placeholder="examplename@example.com" required>
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="emailName">National_ID</label>
                        <input class="form-control" name="national_id" value="{{$user->national_id}}" type="number" id='emailName'
                               required>
                    </div>

                    <div class="col-md-12">
                        <label class="label" for="pAddress">Địa chỉ*</label>
                        <input id="pAddress" class="form-control" name="address" value="{{$user->address}}" type="text">
                    </div>

                    <div class="col-md-12">
                        <label class="label" for="pAddress">Anh khuon mat*</label>
                        <input id="pAddress" class="form-control" name="image_face" value="{{$user->image_face}}" type="file" >
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="pAddress">anh can cuoc 1*</label>
                        <input id="pAddress" class="form-control" name="image_id1" value="{{$user->image_id1}}" type="file" >
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="pAddress">anh can cuoc 2*</label>
                        <input id="pAddress" class="form-control" name="image_id2" value="{{$user->image_id2}}" type="file" >
                    </div>

                    <div class="col-md-6">
                        <label class="label" for="inputPhoneNumber">Số điện thoại*</label>
                        <input id="inputPhoneNumber" class="form-control w-100" name="telephone" value="{{$user->telephone}}" type="number">
                    </div>

                </div>
                <div class="row mt-60">
                    <div class="col-md-12">
                        <div class="nav-btn d-flex flex-wrap justify-content-between">
                            <a href="{{url("admin/detailuser",["user"=>$user->id])}}"
                               class=" prev-btn theme-btn-primary_alt theme-btn"><i
                                    class="arrow_left"></i>Trở lại
                            </a>
                            <button type="submit"
                                    class=" next-btn theme-btn-primary_alt theme-btn ">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
