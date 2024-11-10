@extends('layouts.app') @section('content') @csrf
<div class="main-content main-content-login">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-trail breadcrumbs">
          <ul class="trail-items breadcrumb">
            <li class="trail-item trail-begin">
              <a href="../../index.html">Home</a>
            </li>
            <li class="trail-item trail-end active">Đăng nhập</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="site-main">
          <h3 class="custom_blog_title">Đăng nhập</h3>
          <div class="customer_login">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="login-item">
                  <h5 class="title-login">Đăng nhập tài khoản</h5>
                  <form action="{{ route('login') }}" method="POST" id="loginForm" class="login">@csrf
                    <div class="social-account">
                      <h6 class="title-social">Login with social account</h6>
                      <a href="#" class="mxh-item facebook">
                        <i class="icon fa fa-facebook-square" aria-hidden="true"></i>
                        <span class="text">FACEBOOK</span>
                      </a>
                      <a href="#" class="mxh-item twitter">
                        <i class="icon fa fa-twitter" aria-hidden="true"></i>
                        <span class="text">TWITTER</span>
                      </a>
                    </div>@if ($errors->getBag('login')->any())
                    <div>@foreach ($errors->getBag('login')->all() as $error)
                      <p class="text-danger">{{ $error }}</p>@endforeach</div>@endif
                    <p class="form-row form-row-wide">
                      <label class="text">Tài khoản</label>
                      <input name="username" type="text" class="input-text" title="username" required>
                    </p>
                    <p class="form-row form-row-wide">
                      <label class="text">Mật khẩu</label>
                      <input name="password" type="password" class="input-text" title="password" required>
                    </p>
                    <p class="lost_password">
                      <span class="inline">
                        <input type="checkbox" id="cb1" name="remember">
                        <label for="cb1" class="label-text">Remember me</label>
                      </span>
                      <a href="#" class="forgot-pw">Quên mật khẩu?</a>
                    </p>
                    <p class="form-row">
                      <input type="submit" class="button-submit" value="Đăng Nhập">
                    </p>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="login-item">
                  <h5 class="title-login">Đăng ký tài khoản</h5>
                  <form action="{{ route('register') }}" method="POST" class="register">
    @csrf
    @if ($errors->getBag('register')->any())
        <div>
            @foreach ($errors->getBag('register')->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <p class="form-row form-row-wide">
        <label class="text">Email</label>
        <input name="email" type="email" class="input-text" title="email" required>
    </p>
    <p class="form-row form-row-wide">
        <label class="text">Tài khoản</label>
        <input name="username" type="text" class="input-text" title="username" required>
    </p>
    <p class="form-row form-row-wide">
        <label class="text">Họ và Tên</label>
        <input name="fullname" type="text" class="input-text" title="fullname" required>
    </p>
    <p class="form-row form-row-wide">
        <label class="text">Mật khẩu</label>
        <input name="password" type="password" class="input-text" title="pass" required>
    </p>
    <p class="form-row">
        <span class="inline">
            <input type="checkbox" id="cb2" name="terms" checked>
            <label for="cb2" class="label-text">I agree to <span>Terms & Conditions</span></label>
        </span>
    </p>
    <p class="">
        <input type="submit" class="button-submit" value="Đăng Ký">
    </p>
</form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>@endsection