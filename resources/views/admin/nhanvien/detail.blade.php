@extends("user.layout")
@section("title")
    Chi tiết nhân viên
@endsection
@section("main_content")
    <div style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Chỉnh sửa nhân viên</h3>

        <div class="loan-details-widget bg_white">

                <div class="row gy-4">
                    <div class="col-md-12">
                            <img width="200" src="{{$user->image_face}}">
                            <h3 >{{$user->name}}</h3>
                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">Email:*</label>
                            <h3 >{{$user->email}}</h3>
                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">Ngay Thang Nam sinh:*</label>
                            <h3 >{{$user->birthday}}</h3>
                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">Dia Chi:*</label>
                            <h3 >{{$user->address}}</h3>
                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">So can cuoc cong dan:*</label>
                            <h3 >{{$user->national_id}}</h3>
                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">Anh can cuoc mat truoc:*</label>
                    <img width="200" src="{{$user->image_id1}}">

                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">Anh can cuoc mat sau:*</label>
                    <img width="200" src="{{$user->image_id2}}">

                    </div>
                    <div class="col-md-12">
                    <label class="label" for="fName">So Dien Thoai:*</label>
                            <h3 >{{$user->telephone}}</h3>
                    </div>

                    <form action="{{url("/admin/detailstaff",["user"=>$user->id])}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label class="label" for="inputPhoneNumber">Chinh Sua Trang Thai*</label>
                            @if($user->status ==1)
                                <button type="submit" value="0" name="passed"  class="btn btn-danger">Khoa</button>
                            @elseif($user->status ==0)
                                <button type="submit" value="1" name="passed"  class="btn btn-primary">Mo</button>
                            @endif
                        </div>
                    </form>
                </div>
            <div class="row mt-60">
                <div class="col-md-12">
                    <div class="nav-btn d-flex flex-wrap justify-content-between">
                        <a href="{{url("admin/liststaff")}}"
                           class=" prev-btn theme-btn-primary_alt theme-btn"><i
                                class="arrow_left"></i>Trở lại
                        </a>
                        <a href="{{url("admin/editstaff",["user"=>$user->id])}}"
                           class=" prev-btn theme-btn-primary_alt theme-btn">Chinh Sua
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
