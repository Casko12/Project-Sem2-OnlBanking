@extends("layouts.layout2")
<base href="{{ url("/") }}"/>
@section("title")
    Trang cá nhân
@endsection
@section("main_content")
    <div class="bg-white shadow-sm rounded p-4 mb-4">
        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Tuỳ chỉnh<a href="#edit-account-settings" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
        <hr class="mx-n4 mb-4">
        <div class="row gx-3 align-items-center">
            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ngôn ngữ:</p>
            <p class="col-sm-9 text-3">Tiếng Việt</p>
        </div>
        <div class="row gx-3 align-items-center">
            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Time Zone:</p>
            <p class="col-sm-9 text-3">(GMT+07:00) Bankok, Hanoi, Jakarta</p>
        </div>
    </div>
@endsection



