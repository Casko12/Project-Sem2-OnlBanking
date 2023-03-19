@extends('layouts.app')

@section('content')
    <div class="card-body register-card-body">
        <p class="login-box-msg; text-danger">Đăng nhập để tiếp tục?</p>

        <form  method="post"action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <input  placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input placeholder="Mật khẩu" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            Đồng ý các <a href="#">điều khoản</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>



        <p class="mb-1">
            <a href="forgot-password">Tôi quên mật khẩu</a>
        </p>
        <p class="mb-0">
            <a href="{{route("register")}}" class="text-center">Đăng kí tài khoản mới</a>
        </p>
    </div>
@endsection
