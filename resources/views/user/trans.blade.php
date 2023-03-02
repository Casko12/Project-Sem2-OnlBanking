<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chuyển khoản </title>
    @include("user.html.css")
</head>
<body>
@include("user.html.header")
@include("user.html.section-banner")



<div class="col-md-5">
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

@include("user.html.js")
</body>
</html>
