<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        $title = "Login";
        $categories = Category::get();
        return view('auth.login')->with([
            'title' => $title,
            'categories' => $categories,
        ]);
    }

    public function postLogin(Request $req) {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $dataUserLogin = [
            'email' => $req->email,
            'password' => $req->password
        ];

        $remember = $req->has('remember') ? true : false;

        if (!Auth::attempt($dataUserLogin)) {
            return redirect()->back()->with([
                'msg' => 'Email hoặc mật khẩu không đúng.',
            ]);
        }

        if (Auth::attempt($dataUserLogin, $remember)) {
            // Logout hết các tài khoản khác
            Session::where('user_id', Auth::id())->delete();
            // Tạo session mới cho tài khoản đang đăng nhập
            session()->put('user_id', Auth::id());

            // Đăng nhập thành công
            if (Auth::user()->role_id == '1') {
                return redirect()->route('admin.dashboard')->with([
                    'msg' => 'Đăng nhập thành công!',
                ]);
            } else {
                return redirect()->route('home');
            }
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->with([
                'msg' => 'Email hoặc password không đúng!',
            ]);
        }
    }

    public function register()
    {
        $title = "Register";
        $categories = Category::get();
        return view('auth.register')->with([
            'title' => $title,
            'categories' => $categories,
        ]);
    }
    
    public function postRegister(Request $req) {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        
        $dataUserRegister = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role_id' => 2, // Mọi tài khoản đăng ký mới đều gán role mặc định là 2 (user)
        ];

        // Kiểm tra email đã tồn tại chưa
        if (User::where('email', $req->email)->exists()) {
            return redirect()->back()->with([
                'msg' => 'Email đã tồn tại!',
            ]);
        }

        // Tạo tài khoản mới
        User::create($dataUserRegister);

        return redirect()->route('auth.login')->with([
            'msg' => 'Đăng ký thành công! Vui lòng đăng nhập.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
