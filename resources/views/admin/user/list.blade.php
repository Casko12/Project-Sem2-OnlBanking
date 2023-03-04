@extends("user.layout")
@section("main_content")

    <div class="container" style="margin-top: 200px;margin-bottom: 100px">
        <h3 style="text-align: center">Danh sách tài khoản</h3>
        <div style="margin-bottom: 10px">
            <a class="theme-btn" href="#">Thêm mới</a>
        </div>
        <div>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 300px">Name</th>
                    <th style="width: 300px">Email</th>
                    <th style="width: 200px">CMT</th>
                    <th style="width: 100px">Trạng thái</th>
                    <th style="width: 40px">Sửa</th>
                    <th style="width: 40px">Xóa</th>
                    <th style="width: 80px">Chi tiết</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>nam</td>
                    <td>nam@gmail.com</td>
                    <td>21312</td>
                    <td>1</td>
                    <td><a class="btn-link" href="#">Sửa</a></td>
                    <td><a class="btn-danger" href="#">Xóa</a></td>
                    <td><a class="btn-link" href="#">Chi tiết</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>hoang</td>
                    <td>hoang@gmail.com</td>
                    <td>545241214</td>
                    <td>1</td>
                    <td><a class="btn-link" href="#">Sửa</a></td>
                    <td><a class="btn-danger" href="#">Xóa</a></td>
                    <td><a class="btn-link" href="#">Chi tiết</a></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->
@endsection
