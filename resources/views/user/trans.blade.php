
@extends("user.layout")
@section("main_content")

<div class="col-md-5" style="margin: 200px">
<form>
    <div class="mb-3">
        <label  class="form-label">Số Tài Khoản</label>
        <input type="text" class="form-control"  >
    </div>
    <div class="mb-3">
        <label  class="form-label">Tên Người Dùng </label>
        <input type="text" class="form-control" >
    </div>
    <div class="mb-3">

        <label  class="form-label"> Số Tiền Cần Chuyển </label>
        <input type="text" class="form-control" >
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Chọn Ngân Hàng</option>
        <option value="1">MB</option>
        <option value="2">Aribank</option>
        <option value="3">Techcombank</option>
    </select>

    <button type="submit" class="btn btn-primary">Chuyển Khoản</button>
</form>
</div>
@endsection



