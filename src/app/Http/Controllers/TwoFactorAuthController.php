<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\TwoFactorAuthPassword;
use App\Models\User;

class TwoFactorAuthController extends Controller
{
    public function login_form() {  // ログインフォーム
        return view('emails.two_factor_auth.login_form');
    }
    public function first_auth(Request $request) {  // １段階目の認証
        $credentials = $request->only('email', 'password');
        if(\Auth::validate($credentials)) {
            $random_password = '';
            for($i = 0 ; $i < 4 ; $i++) {
                $random_password .= strval(rand(0, 9));
            }
            $user = \App\Models\User::where('email', $request->email)->first();
            $user->tfa_token = $random_password;            
            $user->tfa_expiration = now()->addMinutes(10);  
            $user->save();
            \Mail::to($user)->send(new TwoFactorAuthPassword($random_password));
            return [
                'result' => true,
                'user_id' => $user->id
            ];
        }
        return ['result' => false];
    }

    public function second_auth(Request $request) {  // ２段階目の認証
        $result = false;
        if($request->filled('tfa_token', 'user_id')) {
            $user = \App\Models\User::find($request->user_id);
            $expiration = new Carbon($user->tfa_expiration);
            if($user->tfa_token === $request->tfa_token && $expiration > now()) {
                $user->tfa_token = null;
                $user->tfa_expiration = null;
                $user->save();
                \Auth::login($user);   
                $result = true;
            }
        }
        return ['result' => $result];
    }
}