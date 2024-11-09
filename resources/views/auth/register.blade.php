@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'Lỗi!',
                    text: "{{ implode(', ', $errors->all()) }}",
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'Thành công!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    <form action="{{ route('register') }}" method="POST" id="registerForm">
        @csrf
        <div class="auth-wrapper">
            <div class="card auth-content mb-0">
                <div class="card-body py-5">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 text-primary">naminc.io</h3>
                        <div class="font-18 text-center">Đăng kí tài khoản</div>
                    </div>
                    <div class="mb-4">
                        <div class="md-form mb-0">
                            <input class="md-form-control" type="email" name="email" placeholder="Nhập Địa Chỉ Email" required>
                            <label for="email">Email:</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="md-form mb-0">
                            <input class="md-form-control" type="text" name="username" placeholder="Nhập Tên Đăng Nhập" required>
                            <label for="username">Username:</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="md-form mb-0">
                            <input class="md-form-control" type="password" name="password" placeholder="Nhập Mật Khẩu" required>
                            <label for="password">Mật Khẩu:</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="md-form mb-0">
                            <input class="md-form-control" type="password" name="password_confirmation" placeholder="Xác Nhận Mật Khẩu" required>
                            <label for="password_confirmation">Xác Nhận Mật Khẩu:</label>
                        </div>
                    </div>

                    <button class="btn btn-success btn-block btn-rounded" type="submit"><i class="fa fa-user-plus"></i> Đăng Ký</button>
                    <a class="btn btn-primary btn-block btn-rounded" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a>
                </div>
            </div>
        </div>
    </form>
@endsection
@php
    // Disable footer
    $showFooter = false;
@endphp
