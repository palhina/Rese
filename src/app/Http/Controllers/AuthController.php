<?php

namespace app\Http\Controllers;

use App\Models\User;
use App\Models\Manager;
use App\Models\Admin;
use Illuminate\Routing\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ユーザー新規登録ページ表示
    public function userRegister()
    {
        return view('auth.register');
    }

    // ユーザー新規登録処理
    public function postUserRegister(RegisterRequest $request)
    {   
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return view('thanks');
    }

    // ユーザーログインページ表示
    public function userLogin()
    {
        return view('auth.login');
    }

    // ユーザーログイン処理
    public function postUserLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/');
        } else {
            return redirect('login/user')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    // ユーザーログアウト処理
    public function userLogout()
    {
        Auth::logout();
        return redirect("login/user");
    }

    // 店舗代表者新規登録ページ表示
    public function managerRegister()
    {
        return view('auth.manager_register');
    }

    // 店舗代表者新規登録処理
    public function postManagerRegister(RegisterRequest $request)
    {   
        Manager::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/register/manager')->with('result', '店舗代表者アカウントの作成に成功しました');
    }

    // 店舗代表者ログインページ表示
    public function managerLogin()
    {
        return view('auth.manager_login');
    }

    // 店舗代表者ログイン処理
    public function postManagerLogin(LoginRequest $request)
    {
        if (Auth::guard('managers')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return view('manager_menu');
        } else {
            return redirect('/login/manager')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    // 店舗代表者ログアウト
    public function managerLogout()
    {
        Auth::guard('managers')->logout();
        return redirect('login/manager')->with('result', 'ログアウトしました');
    }

    // 管理者新規登録ページ表示
    public function adminRegister()
    {
        return view('auth.admin_register');
    }

    // 管理者新規登録処理
    public function postAdminRegister(RegisterRequest $request)
    {   
        Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/login/admin')->with('result', '管理者アカウントの作成に成功しました');
    }

    // 管理者ログインページ表示
    public function adminLogin()
    {
        return view('auth.admin_login');
    }

    // 管理者ログイン処理
    public function postAdminLogin(LoginRequest $request)
    {
        if (Auth::guard('admins')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/register/manager')->with('result', '管理者ログインに成功しました');
        } else {
            return redirect('/login/admin')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    // 管理者ログアウト処理
    public function adminLogout()
    {
        Auth::guard('admins')->logout();
        return redirect('/login/admin')->with('result', 'ログアウトしました');
    }
}
