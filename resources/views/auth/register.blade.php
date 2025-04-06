@extends('client.layouts.main')

@section('content')
    <section class="section-login padding-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cr-login aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000"
                        data-aos-delay="400">
                        <div class="form-logo">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </div>
                        @if (session('msg'))
                            <p class="text-danger">{{ session('msg') }}</p>
                        @endif
                        <form action="{{route('auth.postRegister')}}" method="POST" class="cr-content-form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Họ và tên*</label>
                                        <input type="text" placeholder="Nhập họ và tên" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Nhập email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mật khẩu*</label>
                                        <input type="password" placeholder="Nhập mật khẩu" class="form-control @error('password') is-invalid @enderror" name="password">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu*</label>
                                        <input type="password" placeholder="Nhập lại mật khẩu" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="cr-register-buttons">
                                    <button type="submit" class="cr-button">Đăng ký</button>
                                    <a href="{{route('auth.login')}}" class="link">
                                        Đã có tài khoản?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
