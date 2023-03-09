@extends("admin.layout")
@section("title")
    Danh sách
@endsection
@section("main_content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh Sách Nhân Viên </h3>
            <a href="{{url("admin/staff/createstaff")}}" class="btn btn-primary" style="float: right">Create</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Name</th>
                    <th style="width: 40px">Status</th>
                    <th style="width: 40px">Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>

                        @if(!$item->status)
                            <td>Checking</td>
                        @else
                            <td>Active</td>
                        @endif
                        <td>
                            <a href="{{url("/admin/account/detail",["user"=>$item->id])}}" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
        </div>
    </div>
@endsection
