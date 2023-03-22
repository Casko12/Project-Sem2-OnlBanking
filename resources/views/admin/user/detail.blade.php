@extends("user.layout")
@section("title")
    Chi tiết người dùng
@endsection
@section("main_content")
    <div style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Chi tiết người dùng</h3>

        <div class="loan-details-widget bg_white">

            <div class="row gy-4">
                <div class="col-md-6">
                    <label class="label text-danger" for="fName" >Ảnh đại diện:*</label>
                    <img width="200" src="{{$user->image_face}}">

                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Tên:*</label>
                    <h3 class="label">{{$user->name}}</h3>
                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Email:*</label>
                    <h3 class="label">{{$user->email}}</h3>
                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Ngày sinh:*</label>
                    <h3 class="label">{{$user->birthday}}</h3>
                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Địa chỉ:*</label>
                    <h3 class="label">{{$user->address}}</h3>
                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Số căn cước công dân:*</label>
                    <h3 class="label">{{$user->national_id}}</h3>
                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Ảnh căn cước mặt trước:*</label>
                    <img width="200" src="{{$user->image_id1}}">

                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Ảnh căn cước mặt sau:*</label>
                    <img width="200" src="{{$user->image_id2}}">

                </div>
                <div class="col-md-6">
                    <label class="label text-danger" for="fName">Số điện thoại:*</label>
                    <h3 class="label ">{{$user->telephone}}</h3>
                </div>
                <div class="col-md-6">
                    @if($user->status ==2)
                        <label class="label text-danger" for="inputPhoneNumber" name="id" id="id" value="{{$user->id}}">Chỉnh sửa trạng thái*</label>
                        <button type="button" onclick=""  class="btn btn-danger">tao tai khoan</button>
                    @endif
                    <form action="{{url("/admin/detailstaff",["user"=>$user->id])}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label class="label text-danger" for="inputPhoneNumber">Chỉnh sửa trạng thái*</label>
                            @if($user->status ==1)
                                <button type="submit" value="0" name="passed"  class="btn btn-danger">Block</button>
                            @elseif($user->status ==0)
                                <button type="submit" value="1" name="passed"  class="btn btn-primary">Active</button>
                            @endif
                        </div>
                    </form>
                </div>

                <div class="row mt-60">
                    <div class="col-md-12">
                        <div class="nav-btn d-flex flex-wrap justify-content-between">
                            <a href="{{url("admin/liststaff")}}"
                               class=" prev-btn theme-btn-primary_alt theme-btn"><i
                                    class="arrow_left"></i>Quay lại
                            </a>
                            <a href="{{url("admin/editstaff",["user"=>$user->id])}}"
                               class=" next-btn theme-btn-primary_alt theme-btn ">Chỉnh sửa<i
                                    class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("custom_js")
    <script>
        function createAccount(){
            var id = $("#id").val()
            $.ajax({
                url:"/createAccount",
                method: "get"
            })
        }

    </script>
