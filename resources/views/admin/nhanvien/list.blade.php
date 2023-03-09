@extends("user.layout")
@section("title")
    Danh sách nhân viên
@endsection
@section("main_content")

    <div class="container" style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Danh sách nhân viên</h3>
        <div style="margin-bottom: 10px">
            <a class="theme-btn" href="#">Thêm mới</a>
        </div>
        <div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th style="width: 300px">Name</th>
                    <th style="width: 300px">Email</th>
                    <th style="width: 200px">CMT</th>
                    <th style="width: 100px">Trạng thái</th>
                    <th style="width: 80px">Chi tiết</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->national_id}}</td>
                        @if(!$item->status)
                            <td>Checking</td>
                        @else
                            <td>Active</td>
                            @endif
                        <td><a class="btn-link" href="{{url("/admin/detailstaff",["user"=>$item->id])}}">Chi tiết</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
        </div>
    </div>
    <!-- /.card -->
@endsection
