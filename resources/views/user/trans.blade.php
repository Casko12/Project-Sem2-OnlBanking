@section("custom_css")
    <link rel="stylesheet" type="text/css" href="/user/html/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/user/html/css/responsive.css" media="all" />
@endsection
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
@section("custom_js")
    <script type="text/javascript" src="/user/html/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/user/html/js/preloader.js"></script>
    <script type="text/javascript" src="/user/html/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/user/html/js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="/user/html/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="/user/html/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="/user/html/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="/user/html/js/parallax.js"></script>
    <script type="text/javascript" src="/user/html/js/jquery.parallax-scroll.js"></script>
    <script type="text/javascript" src="/user/html/js/wow.min.js"></script>

    <script type="text/javascript" src="/user/html/js/custom.js"></script>

@endsection


