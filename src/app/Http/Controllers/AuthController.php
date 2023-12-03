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
    // 以下、ユーザー認証機能
    public function userRegister()
    {
        return view('auth.register');
    }

    public function postUserRegister(RegisterRequest $request)
    {   
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return view('thanks');
    }

    public function userLogin()
    {
        return view('auth.login');
    }

    public function postUserLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/');
        } else {
            return redirect('login/user')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect("login/user");
    }

    // 以下、店舗代表者認証機能
    public function managerRegister()
    {
        return view('auth.manager_register');
    }

    public function postManagerRegister(RegisterRequest $request)
    {   
        Manager::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/register/manager')->with('result', '店舗代表者アカウントの作成に成功しました');
    }

    public function managerLogin()
    {
        return view('auth.manager_login');
    }

    public function postManagerLogin(LoginRequest $request)
    {
        if (Auth::guard('managers')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return view('manager_menu');
        } else {
            return redirect('/login/manager')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    public function managerLogout()
    {
        Auth::guard('managers')->logout();
        return redirect('login/manager')->with('result', 'ログアウトしました');
    }

    // 以下、管理者認証機能
    public function adminRegister()
    {
        return view('auth.admin_register');
    }

    public function postAdminRegister(RegisterRequest $request)
    {   
        Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/login/admin')->with('result', '管理者アカウントの作成に成功しました');
    }

    public function adminLogin()
    {
        return view('auth.admin_login');
    }

    public function postAdminLogin(LoginRequest $request)
    {
        if (Auth::guard('admins')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/register/manager');
        } else {
            return redirect('/login/admin')->with('result', 'メールアドレスまたはパスワードが違います');
        }
    }

    public function adminLogout()
    {
        Auth::guard('admins')->logout();
        return redirect('/login/admin')->with('result', 'ログアウトしました');
    }
}
