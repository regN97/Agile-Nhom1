@extends('client.layouts.main')

@section('content')
    <section class="section-login padding-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-login aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </div>
                        @if (session('msg'))
                            <p class="text-danger">{{ session('msg') }}</p>
                        @endif
                        <form action="{{ route('auth.postLogin') }}" method="POST" class="cr-content-form">
                            @csrf
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" placeholder="Nhập địa chỉ email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu*</label>
                                <input type="password" placeholder="Nhập mật khẩu"
                                    class="form-control @error('password') is-invalid @enderror" name="password">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="remember">
                                <span class="form-group custom">
                                    <input type="checkbox" id="html" name="remember">
                                    <label for="html">Remember Me</label>
                                </span>
                                <a class="link" href="forgot.html">Quên mật khẩu?</a>
                            </div><br>
                            <div class="login-buttons">
                                <button type="submit" class="cr-button">Đăng nhập</button>
                                <a href="{{ route('auth.register') }}" class="link">
                                    Chưa có tài khoản?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
