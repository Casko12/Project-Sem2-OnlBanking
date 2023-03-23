@extends("user.layout")
@section("title")
    Danh sách lãi suất khoản vay
@endsection
@section("main_content")

    <div class="container" style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Danh sách lãi suất khoản vay</h3>
        <div class="row" style="margin-top: 20px">
            <div class="col-md-6">
                <a class="theme-btn" href="{{url("/admin/danhsach-khoanvay-create")}}">Thêm mới</a>
            </div>

            <div class="col-md-6" style="margin-top: 22px">
                <form action="/admin/liststaff" method="get">
                    <div style="float: right">
                        <input type="search" value="{{app("request")->input("search")}}" name="search" id="search" placeholder="Search"/>
                        <button type="submit" style="background-color: #0a53be; color: white;border: 1px;text-align: center">Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>
        <div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th style="width: 300px">Kỳ hạn</th>
                    <th style="width: 300px">Lãi suất</th>
                    <th style="width: 300px">Trạng thái</th>
                    <th style="width: 100px">Edit</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12 tháng</td>
                        <td>3,1%</td>
                        <td>Mở</td>
                        <td><a class="btn-link" href="{{url("/admin/danhsach-khoanvay-edit")}}">Chỉnh sửa</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
{{--            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}--}}
        </div>
    </div>
    <!-- /.card -->
@endsection
