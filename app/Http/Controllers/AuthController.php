<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/'); // Chuyển hướng đến trang chủ nếu đã đăng nhập
        }
        return view('auth.login');
    }
    public function showRegisterForm()
{
    if (Auth::check()) {
        return redirect('/'); // Chuyển hướng đến trang chủ nếu đã đăng nhập
    }

    return view('auth.register');
}


// Xử lý dữ liệu đăng nhập
public function login(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return back()->withErrors(['login' => 'Thông tin đăng nhập không đúng, vui lòng thử lại.'], 'login');
}

// Xử lý đăng ký
public function register(Request $request)
{
try {
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username|min:6',
        'password' => 'required|confirmed|min:8',
    ], [
        'email.required' => 'Vui lòng nhập email.',
        'email.email' => 'Địa chỉ email không hợp lệ.',
        'email.unique' => 'Email đã tồn tại.',
        'username.required' => 'Vui lòng nhập tên tài khoản.',
        'username.min' => 'Tên tài khoản phải có ít nhất 6 ký tự.',
        'password.required' => 'Vui lòng nhập mật khẩu.',
        'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
    ]);
    
    // Kiểm tra lỗi xác thực
    if ($errors = session('errors')) {
        dd($errors->all());
    }

    // Tạo người dùng mới
    $user = User::create([
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);

    // Đăng nhập người dùng sau khi đăng ký thành công
    Auth::login($user);

    return redirect('/')->with('success', 'Đăng ký thành công! Bạn đã được đăng nhập.');
   
}

// Nếu xác thực thất bại, Laravel sẽ tự động chuyển hướng lại trang trước với lỗi trong error bag "register"
catch (\Illuminate\Validation\ValidationException $e) {
    return back()->withErrors($e->errors(), 'register');
} }

    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
